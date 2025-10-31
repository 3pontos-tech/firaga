<?php

use App\Adapter\AbacatePayAdapter;
use App\Enums\Payments\PaymentMethodEnum;
use App\Enums\Payments\PaymentPlanType;
use App\Enums\Payments\PaymentProviderEnum;
use App\Filament\Consultant\Resources\Payments\Pages\CreatePayment;
use App\Models\Consultants\Payment;
use App\Models\User;
use Tests\Fixtures\FakeGatewayClass;
use TresPontosTech\Consultant\Core\Enums\ConsultantIntegrationProvider;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

test('should be able to create a payment', function () {
    $this->app->bind(AbacatePayAdapter::class, FakeGatewayClass::class);

    filament()->setCurrentPanel('consultant');
    $user = User::factory()->create();
    $user->consultants()->create([
        'name' => 'consultant-something',
        'phone' => 'consultant-something',
        'email' => 'consultant-something',
        'short_description' => 'consultant-something',
        'slug' => 'consultant-something',
        'biography' => 'consultant-something',
        'readme' => 'consultant-something',
        'socials_urls' => ['consultant-something' => 'consultant-something'],
        'provider' => ConsultantIntegrationProvider::GoHighLevel->value,
        'enabled' => true,
    ]);

    actingAs($user);
    livewire(CreatePayment::class)
        ->fillForm([
            'provider' => PaymentProviderEnum::AbacatePay->value,
            'plan' => PaymentPlanType::Black->value,
            'customer_name' => 'fuedase',
            'customer_email' => 'joe@doe.com',
            'payment_method' => PaymentMethodEnum::Pix->value,
            'customer_phone_number' => '(99) 99999-9999',
            'customer_tax_id' => '(99) 99999-9999',
            'amount' => 1000,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    assertDatabaseHas(Payment::class, [
        'provider' => PaymentProviderEnum::AbacatePay->value,
        'plan' => PaymentPlanType::Black->value,
        'customer_name' => 'fuedase',
        'customer_email' => 'joe@doe.com',
        'customer_phone_number' => '(99) 99999-9999',
        'customer_tax_id' => '(99) 99999-9999',
        'amount' => 1000,
        'payment_url' => 'fake-payment-url',
        'provider_id' => 'fake-external-id',
    ]);

});
