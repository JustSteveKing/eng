<?php

declare(strict_types=1);

use App\Models\Department;
use App\Models\Team;
use App\Models\User;
use function Livewire\Volt\{state};

state([
    'users' => fn() => User::query()->count(),
    'teams' => fn() => Team::query()->count(),
    'departments' => fn() => Department::query()->count(),
]); ?>

<section id="stats" aria-labelledby="stats" class="grid grid-cols-6 gap-4">
    <x-stat title="Users" value="{{ $users }}" icon="o-user" class="col-span-2"/>
    <x-stat title="Teams" value="{{ $teams }}" icon="o-user-group" class="col-span-2"/>
    <x-stat title="Departments" value="{{ $departments }}" icon="o-briefcase" class="col-span-2" />
</section>
