<?php

declare(strict_types=1);

use Filament\Facades\Filament;
use He4rt\Admin\Filament\Pages\ExternalIdentitiesPage;
use He4rt\Admin\Filament\Pages\ManageExternalIdentityPage;
use He4rt\Identity\ExternalIdentity\Models\ExternalIdentity;
use He4rt\Identity\ExternalIdentity\Models\IdentityResource;
use He4rt\Identity\Permissions\Roles;
use He4rt\Identity\Teams\Team;
use He4rt\Identity\Users\User;
use Illuminate\Support\Facades\Context;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\artisan;
use function Pest\Laravel\get;

beforeEach(function (): void {
    artisan('sync:permissions');

    $this->team = Team::factory()->create();
    $this->user = User::factory()->create();
    $this->user->assignRole(Roles::SuperAdmin->value);
    $this->team->members()->attach($this->user);

    Context::add('tenant_id', $this->team->id);
    Filament::setCurrentPanel('admin');
    actingAs($this->user);
    Filament::setTenant($this->team);
});

describe('ExternalIdentitiesPage', function (): void {
    test('authenticated user can access the integrations page', function (): void {
        actingAs($this->user);

        get(ExternalIdentitiesPage::getUrl())
            ->assertSuccessful();
    });

    test('displays provider cards with connection status', function (): void {
        actingAs($this->user);

        ExternalIdentity::factory()->create([
            'team_id' => $this->team->id,
            'connected_by' => $this->user->id,
        ]);

        get(ExternalIdentitiesPage::getUrl())
            ->assertSuccessful()
            ->assertSee('GitHub')
            ->assertSee('Connected');
    });

    test('shows resource stats for connected identity', function (): void {
        actingAs($this->user);

        $identity = ExternalIdentity::factory()->create([
            'team_id' => $this->team->id,
            'connected_by' => $this->user->id,
        ]);

        // 1 mapped resource
        IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
            'resourceable_type' => 'teams',
            'resourceable_id' => $this->team->id,
        ]);

        // 1 unmapped resource
        IdentityResource::factory()->create([
            'external_identity_id' => $identity->id,
            'resourceable_type' => null,
            'resourceable_id' => null,
        ]);

        get(ExternalIdentitiesPage::getUrl())
            ->assertSuccessful()
            ->assertSee('2 projects synced')
            ->assertSee('1 mapped')
            ->assertSee('1 unmapped');
    });

    test('shows Manage link for connected identity', function (): void {
        actingAs($this->user);

        $identity = ExternalIdentity::factory()->create([
            'team_id' => $this->team->id,
            'connected_by' => $this->user->id,
        ]);

        $manageUrl = ManageExternalIdentityPage::getUrl(['identity' => $identity]);

        get(ExternalIdentitiesPage::getUrl())
            ->assertSuccessful()
            ->assertSee($manageUrl, escape: false);
    });

    test('shows Connect button when no identity is connected', function (): void {
        actingAs($this->user);

        get(ExternalIdentitiesPage::getUrl())
            ->assertSuccessful()
            ->assertSee('Connect');
    });
});
