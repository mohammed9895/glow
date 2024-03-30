<div class="border-b py-10 px-5" x-data="{ menu_open:false }">
    <div class="container flex justify-between items-center">
        <div>
            <a href="/">
                <img src="{{ asset('img/glow-logo.png') }}" width="100" alt="">
            </a>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-16">
                <li>
                    <a href="/" class="inline-block border-b-2 border-primary py-10">Home</a>
                </li>
                <li>
                    <a href="/" class="inline-block py-10">About</a>
                </li>
                <li>
                    <a href="/" class="inline-block py-10">Features</a>
                </li>
                <li>
                    <a href="{{ route('categories') }}" class="inline-block py-10">Categories</a>
                </li>
                <li>
                    <a href="/" class="inline-block py-10">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center">
            @guest()
                <div class="mr-5 space-x-3">
                    <a href="{{ route('auth.login') }}" class="">Login</a>
                    <a href="{{ route('auth.register') }}" class="">Register</a>
                </div>
            @endguest
            @auth()
                    <div class="flex space-x-3 mr-5">
                        <a class="flex" href="{{ route('profile') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </a>
                        <a href="{{ route('auth.logout') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>
                        </a>
                    </div>
            @endauth
            <a href="#" class="inline-block p-5 rounded-full bg-primary text-white">
                Donate Now
            </a>
            <button @click="menu_open = !(menu_open)" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-3 w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
    <div class="container md:hidden" x-show="menu_open">
        <ul class="flex flex-col space-y-1">
            <li>
                <a href="/" class="block border-b-2 border-primary py-5">Home</a>
            </li>
            <li>
                <a href="/" class="block py-5">About</a>
            </li>
            <li>
                <a href="/" class="block py-5">Features</a>
            </li>
            <li>
                <a href="{{ route('categories') }}" class="block py-5">Categories</a>
            </li>
            <li>
                <a href="/" class="block py-5">Contact Us</a>
            </li>
        </ul>
    </div>
</div>

