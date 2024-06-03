<?php

declare(strict_types=1);

namespace App\Livewire\Tenant\Settings;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

final class ProfileForm extends Component
{
    public string $name = '';

    public string $email = '';

    public function mount(): void
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function submit(): void
    {
        $this->validate();

        auth()->user()?->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->dispatch('user-updated');
    }

    /** @return array<string,array<int,mixed>> */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->user()->id],
        ];
    }

    public function render(Factory $factory): View
    {
        return $factory->make(
            view: 'livewire.tenant.settings.profile-form',
        );
    }
}
