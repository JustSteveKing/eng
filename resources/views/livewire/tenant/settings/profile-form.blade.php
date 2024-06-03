<section id="profile-details-heading" aria-labelledby="profile-details-heading" class="space-y-4 px-4">
    <x-header title="Profile details" subtitle="Update your profile information. Please note that anyone in your workspace will be able to see this information." separator />

    <x-form wire:submit="submit">
        <x-input label="Name" wire:model="name" />
        <x-input label="Email Address" wire:model="email" />

        <x-slot:actions>
            <x-button label="Update" class="btn-primary" type="submit" spinner="submit" />
        </x-slot:actions>
    </x-form>
</section>
