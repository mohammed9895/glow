<div style="background-image: radial-gradient(circle at right, #f3fbda, #fff 20%)">
    <div class="container mt-52 relative">
        <div class="flex flex-col items-center justify-center">
            <h2 class="font-bold text-3xl text-center leading-relaxed">Your donation can light the way to a brighter future for
                <br> those in need—let’s make a difference together.</h2>
            <h1  class="text-7xl font-bold mt-8">+{{ $total_donations }}</h1>
            <a href="#" class="flex justify-between items-center bg-primary text-white p-3 rounded-2xl h-full mt-10 w-1/6">
                <div>Learn More</div>
                <div class="w-10 h-10 bg-secondary text-white flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                    </svg>
                </div>
            </a>
        </div>
        <img src="{{ asset('img/stats1.jpg') }}" class="absolute left-0 top-0 grayscale hover:grayscale-0 transition duration-500 " alt="">
        <img src="{{ asset('img/stats2.jpg') }}" class="absolute left-20 top-[80%] grayscale hover:grayscale-0 transition duration-500" alt="">

        <img src="{{ asset('img/stats3.jpg') }}" class="absolute right-0 top-0 grayscale hover:grayscale-0 transition duration-500" alt="">
        <img src="{{ asset('img/stats4.jpg') }}" class="absolute right-20 top-[90%] grayscale hover:grayscale-0 transition duration-500" alt="">
    </div>
</div>



