<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class TenantFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Tenant::class;

    /** @return array<string,string> */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->domainWord(),
        ];
    }
}
