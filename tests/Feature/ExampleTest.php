<?php

use App\Adapter\AbacatePayAdapter;
use App\Enums\Payments\PaymentPlanType;
use App\Enums\Payments\PaymentProviderEnum;
use App\Filament\Consultant\Resources\Payments\Pages\CreatePayment;
use App\Models\Consultants\Payment;
use App\Models\User;
use Tests\Fixtures\FakeGatewayClass;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

it('returns a successful response', function (): void {
    $response = $this->get('/');
    $response->assertStatus(200);
})->skip();

test('fodase', function () {
    $this->app->bind(AbacatePayAdapter::class, FakeGatewayClass::class);

    filament()->setCurrentPanel('consultant');
    actingAs(User::factory()->create());
    livewire(CreatePayment::class)
        ->fillForm([
            'provider' => PaymentProviderEnum::AbacatePay->value,
            'plan' => PaymentPlanType::Black->value,
            'customer_name' => 'fuedase',
            'customer_email' => 'joe@doe.com',
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
        'provider_id' => 'fake-external-id'
    ]);

});
