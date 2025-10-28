<?php

namespace App\Models\Consultants;

use App\Enums\Payments\PaymentProviderEnum;
use App\Enums\Payments\PaymentStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TresPontosTech\Consultant\Core\Models\Consultant;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'consultant_payments';

    protected $fillable = [
        'consultant_id',
        'provider',
        'provider_id',
        'payment_url',
        'amount',
        'status',
        'customer_name',
        'customer_email',
        'customer_cpf',
        'customer_phone_number',
        'crm_opportunity_id',
    ];

    protected function casts(): array
    {
        return [
            'provider' => PaymentProviderEnum::class,
            'status' => PaymentStatusEnum::class,
        ];
    }

    public function consultant(): BelongsTo
    {
        return $this->belongsTo(Consultant::class);
    }
}
