<?php

declare(strict_types=1);

use App\Models\Department;
use function Livewire\Volt\{state};

state([
    'departments' => fn() => Department::query()->get(),
]); ?>

<div class="grid grid-cols-8 gap-4">
    <x-card class="col-span-4" title="Department List" shadow separator>
        @foreach ($departments as $department)
            <x-list-item :item="$department" no-separator no-hover>
                <x-slot:avatar>
                    <x-icon name="o-envelope" class="w-12 h-12 bg-orange-500 text-white p-2 rounded-full" />
                </x-slot:avatar>
                <x-slot:value>
                    {{ $department->name }}
                </x-slot:value>
                <x-slot:sub-value>
                    {{ $department->description }}
                </x-slot:sub-value>
                <x-slot:actions>
                    <x-button icon="o-trash" class="text-red-500" spinner />
                </x-slot:actions>
            </x-list-item>
        @endforeach
    </x-card>
</div>
