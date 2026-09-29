<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Actions\Leads\LeadData;
use App\Enums\ContactWindow;
use App\Enums\FinancialGoal;
use App\Enums\FinancialSituation;
use App\Http\Middleware\CaptureLeadAttribution;
use App\Rules\BrazilianPhone;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'submission_id' => ['required', 'uuid'],
            'context' => ['required', Rule::in(['modal', 'inline'])],
            'situation' => ['required', Rule::enum(FinancialSituation::class)],
            'goal' => ['required', Rule::enum(FinancialGoal::class)],
            'availability' => ['required', Rule::enum(ContactWindow::class)],
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:30', new BrazilianPhone],
            'origin_page' => ['nullable', 'string', 'max:2048'],
            'origin_label' => ['nullable', 'string', 'max:255'],
            'destination' => ['nullable', 'string', 'max:2048'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'submission_id.required' => 'O identificador do preenchimento é obrigatório.',
            'submission_id.uuid' => 'O identificador do preenchimento é inválido.',
            'situation.required' => 'Informe a sua situação financeira.',
            'goal.required' => 'Informe o seu objetivo financeiro.',
            'availability.required' => 'Informe o melhor horário para contato.',
            'name.required' => 'Informe o seu nome.',
            'email.required' => 'Informe o seu email.',
            'email.email' => 'Digite um email válido.',
            'phone.required' => 'Informe o seu telefone.',
        ];
    }

    public function toLeadData(): LeadData
    {
        /** @var array<string, string> $attribution */
        $attribution = $this->session()->get(CaptureLeadAttribution::SESSION_KEY, []);

        return new LeadData(
            submissionId: $this->string('submission_id')->toString(),
            context: $this->string('context')->toString(),
            situation: $this->enum('situation', FinancialSituation::class),
            goal: $this->enum('goal', FinancialGoal::class),
            availability: $this->enum('availability', ContactWindow::class),
            firstName: $this->string('name')->squish()->before(' ')->toString(),
            email: $this->string('email')->lower()->trim()->toString(),
            phone: (string) BrazilianPhone::normalize($this->string('phone')->toString()),
            originPage: $this->input('origin_page'),
            originLabel: $this->input('origin_label'),
            attribution: $attribution,
        );
    }
}
