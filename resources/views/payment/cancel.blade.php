<x-layouts.app>
    <div style="background-image: radial-gradient(circle at top, #f3fbda, #fff 20%);">
        <div class="max-w-4xl mx-auto text-center pt-24">
            <h1 class="text-5xl font-bold text-gray-800 mb-7 leading-relaxed">Your Donation have been canceled</h1>
        </div>

        <div class="flex items-center justify-center flex-col">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-32 h-32 relative z-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>

                <img src="{{ asset('img/Ellipse.svg') }}" class="absolute top-0 z-10" width="100" alt="">
            </div>
            <h1 class="text-3xl mt-6 font-normal text-center mb-3">You can re-donate again by clicking the button below</h1>
            <a href="{{ route('re-donate', $session['data']['session_id']) }}" class="flex justify-between items-center bg-primary text-white p-3 rounded-2xl h-full mt-10 w-1/6">
                <div>Re-Donate</div>
                <div class="w-10 h-10 bg-secondary text-white flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg>
                </div>
            </a>
        </div>
    </div>
</x-layouts.app>
