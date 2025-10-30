<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\IntegrationProvider;
use App\Models\Consultants\UserConsultant;
use Database\Factories\UserFactory;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use TresPontosTech\Consultant\Core\Models\Consultant;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    use HasRoles;
    use Notifiable;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'provider' => IntegrationProvider::class,
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        if (! app()->isProduction()) {
            return true;
        }

        return match ($panel->getId()) {
            'admin' => $this->hasRole('super_admin'),
            'consultant' => $this->has('consultants')->exists(),
            default => false
        };
    }

    public function author(): HasOne
    {
        return $this->hasOne(Author::class);
    }

    public function consultants(): BelongsToMany
    {
        return $this->belongsToMany(Consultant::class, 'user_consultants', 'user_id', 'consultant_id')
            ->using(UserConsultant::class);
    }
}
