<div>
    <div style="background-image: radial-gradient(circle at top, #f3fbda, #fff 20%);">
        <div class="max-w-4xl mx-auto text-center pt-24">
            <h1 class="text-5xl font-bold text-gray-800 mb-7 leading-relaxed">{{ $project->title }}</h1>
        </div>
    </div>

    <div class="container">
        <div class="flex flex-col md:flex-row gap-10">
            <div class="w-full md:w-2/3">
                <div class="w-full h-[500px] rounded-2xl mb-10" style="background: url('/storage/{{ $project->cover }}'); background-size: cover;"></div>
                {!! $project->description !!}
            </div>
            <div class="w-full md:w-1/3">
                <div class="border border-gray-100 p-4 rounded-2xl shadow" x-data="{ amount: $wire.entangle('amount') }">
                    <h1 class="text-2xl mb-3">Donate Now</h1>
                    <h1>Project Progress {{ ($project->donations->sum('amount') / 1000) / $project->budget * 100 }}%</h1>
                    <div class="w-full h-4 mb-4 bg-gray-200 rounded-full mt-3">
                        <div class="h-4 bg-secondary rounded-full " style="width: {{ ($project->donations->sum('amount') / 1000) / $project->budget * 100 }}%"></div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 mt-5">
                        <button class="border-primary border-2 rounded-full" :class="amount == 5 ? 'bg-primary text-white' : ''" @click="amount = 5">
                            5 OMR
                        </button>
                        <button class="border-primary border-2 rounded-full" :class="amount == 10 ? 'bg-primary text-white' : ''" @click="amount = 10">
                            10 OMR
                        </button>
                        <button class="border-primary border-2 rounded-full" :class="amount == 20 ? 'bg-primary text-white' : ''" @click="amount = 20">
                            20 OMR
                        </button>
                        <button class="border-primary border-2 rounded-full" :class="amount == 50 ? 'bg-primary text-white' : ''" @click="amount = 50">
                            50 OMR
                        </button>
                    </div>
                    <div class="mt-5 relative">
                        <input x-model="amount" class="w-full p-3 rounded-full border border-gray-300 focus:border-primary focus:border-2 out-of-range::border-primary outline-0" placeholder="Custom Amount">
                        <div class="absolute top-3 right-4 text-primary">OMR</div>
                    </div>
                   @if(auth()->check())
                        <button wire:click="donate" class="flex justify-between items-center bg-primary text-white p-3 rounded-full h-full mt-5  w-full">
                            <div>Donate Now</div>
                            <div class="w-10 h-10 bg-secondary text-white flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg>
                            </div>
                        </button>
                    @else
                       <div class="bg-light-yellow text-secondary p-4 rounded mt-3">Please login to donate</div>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>

