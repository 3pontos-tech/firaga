<?php

namespace App\Livewire;

use App\Enums\ContactIntent;
use App\Enums\ContactPreference;
use App\Models\Contact;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|min:10')]
    public string $name = '';

    #[Validate('required|email')]
    public string $email = '';

    #[Validate('required|regex:/^\d{10,11}$/')]
    public string $phoneNumber = '';

    #[Validate('required|min:10')]
    public string $userMessage = '';

    public ContactIntent $messageIntent = ContactIntent::askQuestions;

    public ContactPreference $contactPreference = ContactPreference::whatsapp;

    public string $ipAddress = '';

    public function submit(): void
    {
        $this->validate();
        $this->ipAddress = Request::ip() ?? '';

        Contact::query()->create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phoneNumber,
            'ip_address' => $this->ipAddress,
            'message' => $this->userMessage,
            'message_intent' => $this->messageIntent->value,
            'contact_preference' => $this->contactPreference->value,
        ]);

        session()->flash('message', 'Sua mensagem foi enviada com sucesso!');

        $this->reset();
    }

    /**
     * @return string[]
     */
    protected function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'name.min' => 'O nome deve ter no mínimo 10 caracteres.',
            'email.required' => 'O e-mail é obrigatório.',
            'userMessage.required' => 'A mensagem é obrigatória.',
            'userMessage.min' => 'A mensagem deve ter no mínimo 10 caracteres.',
            'phoneNumber.required' => 'O telefone é obrigatório.',
            'phoneNumber.regex' => 'O telefone deve conter apenas números e ter entre 10 e 11 dígitos.',
        ];
    }

    public function render(): View
    {
        return view('livewire.contact-form', [
            'intents' => ContactIntent::cases(),
            'preferences' => ContactPreference::cases(),
        ]);
    }
}
