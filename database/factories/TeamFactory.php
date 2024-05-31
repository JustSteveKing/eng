<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class TeamFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Team::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->text(),
            'logo' => $this->faker->imageUrl(),
            'user_id' => User::factory(),
        ];
    }
}
