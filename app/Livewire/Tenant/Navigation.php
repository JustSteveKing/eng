<?php

declare(strict_types=1);

namespace App\Livewire\Tenant;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

use function tenant;

final class Navigation extends Component
{
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
