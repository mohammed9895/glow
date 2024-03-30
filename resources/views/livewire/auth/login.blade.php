<div style="background-image: radial-gradient(circle at top, #f3fbda, #fff 20%);">
    <section class="w-full px-8 py-16 xl:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">

                <div class="w-full space-y-5 md:w-3/5 md:pr-16 text-center md:text-left">
                    <p class="font-medium text-primary uppercase" data-primary="primary">Share Life</p>
                    <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                        Changing The Way People Live.
                    </h2>
                    <p class="text-xl text-gray-600 md:pr-16">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                </div>

                <div class="w-full mt-16 md:mt-0 md:w-2/5">
                    <form wire:submit="login">
                        <div
                            class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7"
                            data-rounded="rounded-lg" data-rounded-max="rounded-full">
                            <h3 class="mb-6 text-2xl font-medium text-center">Sign in to your Account</h3>
                            <input type="text" name="email" wire:model="email" id="email"
                                   class="block w-full px-4 py-3 mb-4 border   border-gray-200 rounded-lg focus:ring focus:ring-primary focus:outline-none"
                                   data-rounded="rounded-lg" data-primary="primary" placeholder="Email address">
                            <input type="password" name="password" wire:model="password" id="password"
                                   class="block w-full px-4 py-3 mb-4 border  border-gray-200 rounded-lg focus:ring focus:ring-primary focus:outline-none"
                                   data-rounded="rounded-lg" data-primary="primary" placeholder="Password">
                            @if(session()->has('error'))
                                <div class="text-red-600 mb-2">{{ session()->get('error') }}</div>
                            @endif
                            <div class="block">
                                <button class="w-full px-3 py-4 font-medium text-white bg-secondary rounded-lg"
                                        data-primary="blue-600" data-rounded="rounded-lg">Log Me In
                                </button>
                            </div>
                            <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="#_"
                                                                                                               class="text-primary underline">Sign
                                    up here</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>

