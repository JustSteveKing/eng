<?php

declare(strict_types=1);

namespace App\Livewire\Tenant;

use App\Models\Team;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

use function tenant;

final class Navigation extends Component
{
    #[Computed]
    public function teams(): Collection
    {
        return Team::query()->get();
    }

    #[Computed]
    public function items(): array
    {
        return [
            [
                'label' => 'Dashboard',
                'href' => 'pages:tenants:home',
                'icon' => 'dashboard',
            ]
        ];
    }

    public function render(Factory $factory): View
    {
        return $factory->make(
            view: 'livewire.tenant.navigation',
            data: [
                'tenant' => tenant(),
            ],
        );
    }
}
