<?php

namespace Database\Factories;

use App\Models\Consultants\UserConsultant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use TresPontosTech\Consultant\Core\Models\Consultant;

class UserConsultantFactory extends Factory
{
    protected $model = UserConsultant::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),

            'user_id' => User::factory(),
            'consultant_id' => Consultant::factory(),
        ];
    }
}
