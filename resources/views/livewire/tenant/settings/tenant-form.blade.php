<section id="tenant-details-heading" aria-labelledby="tenant-details-heading">
    <form wire:submit="submit">
        <div class="px-6">
            <div>
                <h2 id="tenant-details-heading" class="text-lg font-medium leading-6">
                    Tenant details
                </h2>
                <p class="mt-1 text-sm">
                    Update your tenant information. Please note that anyone in your workspace will be able to see this information.
                </p>
            </div>

            <div class="pt-6 grid grid-cols-4 gap-6">
                <div class="flex items-center col-span-1">
                    <label for="name" class="block text-sm font-medium leading-6">Name</label>
                </div>
                <div class="flex items-center  col-span-3">
                    <input wire:model="name" type="text" name="name" id="name" autocomplete="off" class="mt-2 block w-full rounded-md border border-slate-100 dark:border-slate-800 px-3 py-1.5 bg-slate-50 dark:bg-slate-900 shadow-sm ring-1 ring-inset ring-slate-200 dark:ring-slate-700 focus:ring-2 focus:ring-inset focus:ring-slate-200 dark:focus:ring-slate-700 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div class="pt-6 grid grid-cols-4 gap-6">
                <div class="flex items-center col-span-1">
                    <label for="email" class="block text-sm font-medium leading-6">Email Address</label>
                </div>
                <div class="flex items-center  col-span-3">
                    <input wire:model="email" type="email" name="email" id="email" autocomplete="off" class="mt-2 block w-full rounded-md border border-slate-100 dark:border-slate-800 px-3 py-1.5 bg-slate-50 dark:bg-slate-900 shadow-sm ring-1 ring-inset ring-slate-200 dark:ring-slate-700 focus:ring-2 focus:ring-inset focus:ring-slate-200 dark:focus:ring-slate-700 sm:text-sm sm:leading-6" />
                </div>
            </div>
        </div>
        <div class="px-4 py-3 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center rounded-md bg-slate-200 dark:bg-slate-700 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">
                Update Tenant
            </button>
        </div>
    </form>
</section>

