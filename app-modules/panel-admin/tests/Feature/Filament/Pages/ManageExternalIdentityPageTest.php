<?php

declare(strict_types=1);

use Filament\Facades\Filament;
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

    $this->identity = ExternalIdentity::factory()->create([
        'team_id' => $this->team->id,
        'connected_by' => $this->user->id,
        'external_account_id' => '4281031',
        'metadata' => ['last_projects_sync_at' => '2026-03-17T15:54:48.000000Z'],
    ]);
});

describe('ManageExternalIdentityPage', function (): void {
    test('authenticated user can access the detail page', function (): void {
        actingAs($this->user);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful();
    });

    test('prevents access to identity from another team', function (): void {
        actingAs($this->user);

        $otherTeam = Team::factory()->create();
        $otherIdentity = ExternalIdentity::factory()->create([
            'team_id' => $otherTeam->id,
        ]);

        $this->withExceptionHandling();

        get(ManageExternalIdentityPage::getUrl(['identity' => $otherIdentity]))
            ->assertNotFound();
    });

    test('displays connection info', function (): void {
        actingAs($this->user);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful()
            ->assertSee('Connection')
            ->assertSee('Connected')
            ->assertSee('#4281031');
    });

    test('displays back to integrations link', function (): void {
        actingAs($this->user);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful()
            ->assertSee('Back to Integrations');
    });

    test('displays projects section when company is selected', function (): void {
        actingAs($this->user);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful()
            ->assertSee('Projects')
            ->assertSee('Sync Projects');
    });

    test('does not display projects section when no company selected', function (): void {
        actingAs($this->user);

        $this->identity->update(['external_account_id' => null]);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful()
            ->assertDontSee('Sync Projects');
    });

    test('displays project mappings table', function (): void {
        actingAs($this->user);

        $mappedTeam = Team::factory()->create(['name' => 'My He4rt Project']);

        IdentityResource::factory()->create([
            'external_identity_id' => $this->identity->id,
            'external_resource_data' => ['name' => 'Sandbox Test Project'],
            'resourceable_type' => 'teams',
            'resourceable_id' => $mappedTeam->id,
        ]);

        IdentityResource::factory()->create([
            'external_identity_id' => $this->identity->id,
            'external_resource_data' => ['name' => 'Unmapped Project'],
            'resourceable_type' => null,
            'resourceable_id' => null,
        ]);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful()
            ->assertSee('Sandbox Test Project')
            ->assertSee('My He4rt Project')
            ->assertSee('Mapped')
            ->assertSee('Unmapped Project')
            ->assertSee('Unmapped');
    });

    test('displays last synced timestamp', function (): void {
        actingAs($this->user);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful()
            ->assertSee('Projects synced:');
    });

    test('shows empty state when no projects synced', function (): void {
        actingAs($this->user);

        get(ManageExternalIdentityPage::getUrl(['identity' => $this->identity]))
            ->assertSuccessful()
            ->assertSee('No projects synced yet');
    });
});
