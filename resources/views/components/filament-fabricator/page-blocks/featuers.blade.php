@aware(['page'])
@props([
    'main_title',
    'featuers',
])

<div class="container mt-52 bg-light-yellow py-52 rounded-3xl">
    <h1 class="text-center text-5xl font-bold mb-20">The Heart of Giving</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        @foreach($featuers as $featuer)
            <div class="flex flex-col justify-center items-center">
                <div class="relative">
                    @if(!$featuer['icon'])
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-32 h-32 relative z-20">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z"/>
                        </svg>
                    @else
                        <x-icon name="{{ $featuer['icon'] }}" class="w-32 h-32 relative z-20"/>
                    @endif
                    @if(!$featuer['back_image'])
                        <img src="{{ asset('img/Ellipse.svg') }}" class="absolute top-0 z-10" width="100" alt="">
                    @else
                        <img src="/storage/{{ $featuer['back_image'] }}" class="absolute top-0 z-10" width="100" alt="">
                    @endif
                </div>
                <h1 class="text-3xl mt-6 font-bold mb-3">{{ $featuer['title'] }}</h1>
                <p class="text-md text-center">{{ $featuer['description'] }}</p>
            </div>
        @endforeach
    </div>
</div>
