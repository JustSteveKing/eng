<x-layouts.app title="Home">
    <x-header title="{{ ucfirst(tenant('id')) }} Home">
        <x-slot:actions>
            <x-theme-toggle class="btn btn-circle btn-ghost" />
        </x-slot:actions>
    </x-header>
    <div class="space-y-4">
        <livewire:tenants.stats />
        <livewire:tenants.department-list />
    </div>
</x-layouts.app>
