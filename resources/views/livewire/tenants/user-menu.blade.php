<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{on,state};

state(['user' => fn() => Auth::user()]);
on(['user-updated' => fn () => $this->user->refresh()]);

$logout = function () {
    Auth::logout();

    $this->redirect(
        url: route('pages:tenants:auth:login'),
    );
} ?>

<x-list-item :item="$user" value="name" no-separator no-hover class="-mx-2 !-my-2 rounded">
    <x-slot:actions>
        <x-button
            wire:click="logout"
            icon="o-power"
            class="btn-circle btn-ghost btn-xs"
            tooltip-left="Sign out"
        />
    </x-slot:actions>
</x-list-item>
