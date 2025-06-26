<?php

use App\Enums\ContactIntent;
use App\Enums\ContactPreference;
use App\Livewire\ContactForm;
use App\Models\Contact;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;

it('renders successfully', function () {
    Livewire::test(ContactForm::class)
        ->assertSuccessful();
});
it('should be able to register a contact', function () {
    Livewire::test(ContactForm::class)
        ->set('name', 'John Doe Da Silva')
        ->set('email', 'john@doe.com')
        ->set('phoneNumber', '11400289221')
        ->set('userMessage', 'Message from contact Form')
        ->call('submit')
        ->assertHasNoErrors();

    assertdatabasecount(Contact::class, 1);
    assertDatabaseHas(Contact::class, [
        'name' => 'John Doe Da Silva',
        'email' => 'john@doe.com',
        'phone_number' => '11400289221',
        'message' => 'Message from contact Form',
        'message_intent' => ContactIntent::askQuestions->value,
        'contact_preference' => ContactPreference::whatsapp->value,
    ]);
});

