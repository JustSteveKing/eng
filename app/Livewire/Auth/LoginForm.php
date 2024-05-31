<?php

declare(strict_types=1);

namespace App\Livewire\Auth;

use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;
use function route;

final class LoginForm extends Component
{
    #[Validate(['required','email','max:255'])]
    public string $email = '';

    #[Validate(['required','string','max:255'])]
    public string $password = '';

    public function submit(AuthManager $auth): void
    {
        $this->validate();

        if ( ! $auth->attempt(['email' => $this->email, 'password' => $this->password])) {
            throw ValidationException::withMessages([
                'email' => 'Failed to authenticate you.',
            ]);
        }

        $this->redirect(
            url: route('pages:tenants:home'),
        );
    }

    public function render(Factory $factory): View
    {
        return $factory->make(
            view: 'livewire.auth.login-form',
        );
    }
}
