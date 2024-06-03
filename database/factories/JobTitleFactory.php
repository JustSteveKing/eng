<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\JobTitle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class JobTitleFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = JobTitle::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'name' => $this->faker->jobTitle(),
        ];
    }
}
