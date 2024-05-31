<?php

declare(strict_types=1);

namespace App\Livewire\Tenant;

use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

final class Header extends Component
{
    #[Computed]
    public function user(): User|Authenticatable
    {
        return Auth::user();
    }

    public function logout(AuthManager $auth): void
    {
        $auth->logout();

        $this->redirect(
            url: route('pages:tenants:auth:login'),
        );
    }

    public function render(Factory $factory): View
    {
        return $factory->make(
            view: 'livewire.tenant.header',
        );
    }
}
