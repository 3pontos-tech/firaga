<?php

namespace App\Console\Commands;

use App\Integrations\HighLevelClient;
use App\Models\User;
use Illuminate\Console\Command;
use Ramsey\Uuid\Uuid;
use TresPontosTech\Consultant\Core\Enums\ConsultantIntegrationProvider;
use TresPontosTech\Consultant\Core\Models\Consultant;

class SyncConsultantsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consultants:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync consultants from CRM (GoHighLevel)';

    /**
     * Execute the console command.
     */
    public function handle(HighLevelClient $client)
    {
        collect($client->getCompanyEmployees()['users'])
            ->map(fn ($employee) => [
                'id' => $employee['id'],
                'name' => $employee['name'],
                'email' => $employee['email'],
                'phone' => $employee['phone'] ?? '+5540028922',
            ])
            ->each(function ($employee) {
                $this->info("Syncing consultant {$employee['name']}...");
                $user = User::query()->firstOrCreate(['email' => $employee['email']], [
                    'name' => $employee['name'],
                    'email' => $employee['email'],
                    'password' => Uuid::uuid4()->toString(),
                ]);

                $consultant = Consultant::query()->firstOrCreate(['email' => $employee['email']], [
                    'provider' => ConsultantIntegrationProvider::GoHighLevel,
                    'enabled' => true,
                    'name' => $employee['name'],
                    'phone' => $employee['phone'],
                    'short_description' => '',
                    'slug' => str($employee['name'])->slug(),
                    'biography' => '',
                    'readme' => '',
                    'socials_urls' => [],
                    'provider_id' => $employee['id'],
                ]);

                $user->consultants()->syncWithoutDetaching($consultant->id);
                $this->info("Consultant {$consultant->name} synced");
            });

    }
}
