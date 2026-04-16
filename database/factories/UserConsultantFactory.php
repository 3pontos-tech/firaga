<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Consultants\UserConsultant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;
use TresPontosTech\Consultant\Core\Models\Consultant;

/**
 * @extends Factory<\App\Models\Consultants\UserConsultant>
 */
class UserConsultantFactory extends Factory
{
    protected $model = UserConsultant::class;

    public function definition(): array
    {
        return [
            'created_at' => Date::now(),
            'updated_at' => Date::now(),

            'user_id' => User::factory(),
            'consultant_id' => Consultant::factory(),
        ];
    }
}
