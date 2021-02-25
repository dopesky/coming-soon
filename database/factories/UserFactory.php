<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory {
    protected $model = User::class;

    public function definition(): array {
        return ['email' => $this->faker->unique()->safeEmail,];
    }
}
