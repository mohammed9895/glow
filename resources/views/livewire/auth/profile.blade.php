<div>
    <x-partials.title :title="'Welcome ' . auth()->user()->name" />
    <div>
        <div class="container mt-36 flex flex-col md:flex-row gap-5">
            <div class="w-full md:w-1/3">
                <x-partials.profile_sidebar />
            </div>
            <div class="w-full md:w-2/3">
                <form wire:submit="updateProfile">
                    @if(session()->has('success'))
                        <div class="bg-light-yellow text-secondary p-5 rounded mb-4">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                        @if(session()->has('error'))
                            <div class="bg-red-300 text-red-700 p-5 rounded mb-4">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                    <div class="grid grid-cols-2 gap-5">
                        <input type="text" class="block w-full px-4 py-3 mb-4 border  border-gray-200 rounded-lg focus:ring focus:ring-primary focus:outline-none" wire:model="fullname">
                        <input type="email" class="block w-full px-4 py-3 mb-4 border  border-gray-200 rounded-lg focus:ring focus:ring-primary focus:outline-none" wire:model="email">
                        <input type="password" class="block w-full px-4 py-3 mb-4 border  border-gray-200 rounded-lg focus:ring focus:ring-primary focus:outline-none" wire:model="current_password" placeholder="Current Password">
                        <input type="password" class="block w-full px-4 py-3 mb-4 border  border-gray-200 rounded-lg focus:ring focus:ring-primary focus:outline-none" wire:model="new_password" placeholder="New Password">
                        <div class="inline-block">
                            <button class="px-3 py-4 font-medium text-white bg-secondary rounded-lg"
                                    data-primary="blue-600" data-rounded="rounded-lg">Update profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
