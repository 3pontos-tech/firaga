<?php

declare(strict_types=1);

use App\Rules\BrazilianPhone;

it('normalizes valid Brazilian numbers to E.164', function (string $input, string $expected): void {
    expect(BrazilianPhone::normalize($input))->toBe($expected);
})->with([
    'celular com máscara' => ['(11) 91234-5678', '+5511912345678'],
    'fixo' => ['11 3456-7890', '+551134567890'],
    'com código do país' => ['+55 21 98765-4321', '+5521987654321'],
    'com zero de operadora' => ['011 91234-5678', '+5511912345678'],
    'DDD 55' => ['55 99876-5432', '+5555998765432'],
]);

it('rejects numbers without area code, with too few digits or with an invalid DDD', function (string $input): void {
    expect(BrazilianPhone::normalize($input))->toBeNull();
})->with([
    'sem DDD' => ['91234-5678'],
    'poucos dígitos' => ['11 1234-567'],
    'DDD com zero' => ['(10) 91234-5678'],
    'celular sem o 9' => ['(11) 81234-56789'],
    'vazio' => [''],
]);
