<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

final class EmployeeFactory extends Factory
{
    /** @var class-string<Model> */
    protected $model = Employee::class;

    /** @return array<string,mixed> */
    public function definition(): array
    {
        return [
            'current_salary' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'department_id' => Department::factory(),
            'user_id' => User::factory(),
        ];
    }
}
