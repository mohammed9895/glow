<x-layouts.app>
    <div style="background-image: radial-gradient(circle at top, #f3fbda, #fff 20%);">
        <div class="max-w-4xl mx-auto text-center pt-24">
            <h1 class="text-5xl font-bold text-gray-800 mb-7 leading-relaxed">Your Donation have been accepted</h1>
        </div>

        <div class="flex items-center justify-center flex-col">
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-32 h-32 relative z-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                </svg>
                <img src="{{ asset('img/Ellipse.svg') }}" class="absolute top-0 z-10" width="100" alt="">
            </div>
            <h1 class="text-3xl mt-6 font-normal text-center mb-3">Thank you for your donation, you have donated to {{ $project['title'] }} <br> for amount <span class="text-secondary font-bold">{{ $session['data']['total_amount'] / 1000 }} OMR</span>.</h1>
        </div>
    </div>
</x-layouts.app>
