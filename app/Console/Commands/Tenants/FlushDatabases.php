<?php

declare(strict_types=1);

namespace App\Console\Commands\Tenants;

use App\Models\Tenant;
use Illuminate\Console\Command;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

#[AsCommand(name: 'tenant:flush', description: 'Flush all tenant databases')]
final class FlushDatabases extends Command
{
    public function handle(DatabaseManager $database): int
    {
        foreach (Tenant::query()->get() as $tenant) {
            // drop the database as the tenant needs removing.
        }

        return SymfonyCommand::SUCCESS;
    }
}
