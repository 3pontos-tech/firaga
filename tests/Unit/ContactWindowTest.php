<?php

declare(strict_types=1);

use App\Enums\ContactWindow;
use Carbon\CarbonImmutable;

it('moves the appointment to Monday when the lead arrives on a Friday or weekend', function (string $submittedAt): void {
    $start = ContactWindow::Morning->nextStartAfter(CarbonImmutable::parse($submittedAt, ContactWindow::TIMEZONE));

    expect($start->toIso8601String())->toBe('2026-10-05T08:00:00-03:00');
})->with([
    'sexta' => ['2026-10-02 10:00'],
    'sábado' => ['2026-10-03 10:00'],
    'domingo' => ['2026-10-04 23:30'],
]);

it('derives the date in São Paulo time even when the moment comes in UTC', function (): void {
    // 2026-10-01 01:00 UTC is still Wednesday 22:00 in São Paulo.
    $start = ContactWindow::Evening->nextStartAfter(CarbonImmutable::parse('2026-10-01 01:00', 'UTC'));

    expect($start->toIso8601String())->toBe('2026-10-01T18:00:00-03:00');
});
