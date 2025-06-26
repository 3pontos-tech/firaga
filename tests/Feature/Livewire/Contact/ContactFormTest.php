<?php

use App\Livewire\ContactForm;

it('renders successfully', function () {
    Livewire::test(ContactForm::class)
        ->assertSuccessful();
});
