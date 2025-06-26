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
test('successful message should be displayed after the form submission', function () {
    $component = Livewire::test(ContactForm::class)
        ->set('name', 'John Doe Da Silva')
        ->set('email', 'john@doe.com')
        ->set('phoneNumber', '11400289221')
        ->set('userMessage', 'Message from contact Form')
        ->call('submit')
        ->assertHasNoErrors();

    $component->assertSee('Sua mensagem foi enviada com sucesso!');
});

describe('validation tests', function () {

    test('name::validations', function ($value, $rule) {
        Livewire::test(ContactForm::class)
            ->set('name', $value)
            ->call('submit')
            ->assertHasErrors(['name' => $rule]);
    })->with([
        'required' => [null, 'O nome é obrigatório.'],
        'min:10' => ['abc', 'O nome deve ter no mínimo 10 caracteres.'],
    ]);

    test('email::validations', function ($value, $rule) {
        Livewire::test(ContactForm::class)
            ->set('email', $value)
            ->call('submit')
            ->assertHasErrors(['email' => $rule]);
    })->with([
        'required' => [null, 'O e-mail é obrigatório.'],
        'email' => ['abc', 'O e-mail deve ser um e-mail válido.'],
    ]);

    test('userMessage::validations', function ($value, $rule) {
        Livewire::test(ContactForm::class)
            ->set('userMessage', $value)
            ->call('submit')
            ->assertHasErrors(['userMessage' => $rule]);
    })->with([
        'required' => [null, 'A mensagem é obrigatória.'],
        'min:10' => ['abc', 'A mensagem deve ter no mínimo 10 caracteres.'],
    ]);

    test('phoneNumber::validations', function ($value, $rule) {
        Livewire::test(ContactForm::class)
            ->set('phoneNumber', $value)
            ->call('submit')
            ->assertHasErrors(['phoneNumber' => $rule]);
    })->with([
        'required' => [null, 'O telefone é obrigatório.'],
        'regex:numbers' => ['abcdefghi', 'O telefone deve conter apenas números e ter entre 10 e 11 dígitos.'],
        'regex:digits' => [str_repeat('9', 12), 'O telefone deve conter apenas números e ter entre 10 e 11 dígitos.'],
    ]);
});
