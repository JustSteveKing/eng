<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /** @var Tenant $tenant */
        $tenant = Tenant::query()->create(
            attributes: [
                'id' => 'treblle',
            ],
        );

        $tenant->domains()->create(
            attributes: [
                'domain' => 'treblle.eng.test',
            ],
        );

        Tenant::all()->runForEach(function (Tenant $tenant) {
            $user = User::factory()->create([
                'name' => 'Steve McDougall',
                'email' => 'juststevemcd@gmail.com',
            ]);

            Team::factory()->for($user)->create([
                'name' => 'Developer Relations',
                'logo' => null,
                'description' => 'The DevRel Team is awesome'
            ]);
        });
    }
}
