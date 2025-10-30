<?php

namespace App\Models\Consultants;

use App\Enums\Payments\PaymentMethodEnum;
use App\Enums\Payments\PaymentPlanType;
use App\Enums\Payments\PaymentProviderEnum;
use App\Enums\Payments\PaymentStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use TresPontosTech\Consultant\Core\Models\Consultant;

/**
 * @property int consultant_id
 * @property PaymentProviderEnum provider
 * @property string provider_id
 * @property string payment_url
 * @property float amount
 * @property PaymentStatusEnum status
 * @property PaymentPlanType plan
 * @property string customer_name
 * @property string customer_email
 * @property string customer_tax_id
 * @property string customer_phoner_number
 * @property string crm_opportunity_id
 */
class Payment extends Model
{
    use HasFactory;

    protected $table = 'consultant_payments';

    protected $fillable = [
        'consultant_id',
        'provider',
        'provider_id',
        'payment_url',
        'payment_method',
        'amount',
        'status',
        'customer_name',
        'customer_email',
        'customer_tax_id',
        'customer_phone_number',
        'crm_opportunity_id',
        'plan',
    ];

    protected function casts(): array
    {
        return [
            'provider' => PaymentProviderEnum::class,
            'status' => PaymentStatusEnum::class,
            'plan' => PaymentPlanType::class,
            'payment_method' => PaymentMethodEnum::class,
        ];
    }

    public function consultant(): BelongsTo
    {
        return $this->belongsTo(Consultant::class);
    }
}
