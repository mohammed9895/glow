@aware(['page'])
@props([
    'main_title',
    'sub_title',
    'button_1_text',
    'button_1_url',
    'button_2_text',
    'button_2_icon',
    'button_2_url',
    'grid_1_percentage',
    'grid_1_text',
    'grid_1_button_text',
    'grid_1_button_url',

    'grid_2_icon',
    'grid_2_text',

    'grid_3_image',
    'grid_3_title',

    'grid_4_title',
    'grid_4_button_text',
    'grid_4_button_url',

    'grid_5_title',
    'grid_5_image',

    'grid_6_image',
    'grid_6_button_text',
    'grid_6_button_url',

    'grid_7_text',
    'grid_7_icon',
])
@dd($grid_3_image)
<div style="background-image: radial-gradient(circle at top, #f3fbda, #fff 50%);">
    <div class="max-w-4xl mx-auto text-center pt-24">
        <h1 class="text-5xl font-bold text-gray-800 mb-7 leading-relaxed">{{ $main_title }}</h1>
        <h2 class="text-xl font-normal text-gray-800 mb-7">{{ $sub_title }}</h2>
        <div class="flex justify-center space-x-3">
            <a href="{{ $button_1_url }}" class="inline-block py-3 px-6 bg-primary rounded-full text-white">{{ $button_1_text }}</a>
            <a href="{{ $button_2_url }}" class="flex py-3 px-6 bg-gray-200 rounded-full text-gray-800">
                @if(!$button_2_icon)
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z"/>
                    </svg>
                    @else
                    <x-icon name="{{ $button_2_icon }}" class="w-6 h-6" />
                @endif
                {{ $button_2_text }}
            </a>
        </div>
    </div>

    <div class="container hidden md:block -mt-32">
        <div class="grid grid-cols-5 grid-rows-2 gap-4">
            <div class="row-span-2">
                <div class="bg-primary text-white flex flex-col justify-between rounded-2xl pt-20 h-full">
                    <h1 class="text-5xl text-white p-3 font-bold">{{ $grid_1_percentage }}</h1>
                    <p class="text-md text-white p-3">{{ $grid_1_text }}</p>
                    <div class="p-3 w-full mt-10">
                        <div class="w-full">
                            <a href="{{ $grid_1_button_url }}"
                               class="flex justify-between items-center bg-[#6dc4a880] text-white p-3 rounded-2xl h-full">
                                <div>{{ $grid_1_button_text }}</div>
                                <div
                                    class="w-10 h-10 bg-secondary text-white flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-start-1 row-start-3">
                <div class="bg-gray-800 text-white flex justify-between items-center px-5 py-10 rounded-2xl h-full">
                    @if(!$grid_2_icon)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-20 h-20 mr-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z"/>
                        </svg>
                        @else
                        <x-icon name="{{ $grid_2_icon }}" class="w-20 h-20 mr-5" />
                    @endif

                    <div class="text-xl">
                        {{ $grid_2_text }}
                    </div>
                </div>
            </div>
            <div class="row-span-2 col-start-2 row-start-2">
                <a href="#"
                   class="relative flex h-full w-full rounded-2xl before:content-[''] before:absolute before:inset-0 before:bg-black/50 before:rounded-2xl"
                   style="background: url('/storage/{{ $grid_3_image }}') left center; background-size: cover;">
                    <h1 class="absolute bottom-5 left-3 text-2xl text-white">
                        {{ $grid_3_title }}
                    </h1>
                </a>
            </div>
            <div class="col-start-3 row-start-3">
                <div
                    class="bg-gray-300 text-gray-800 flex flex-col justify-between items-center pt-10 rounded-2xl h-full">
                    <h1 class="text-2xl text-center mb-4">{{ $grid_4_title }}</h1>
                    <div class="w-full p-3">
                        <a href="{{ $grid_4_button_url }}"
                           class="flex justify-between items-center bg-gray-500 text-gray-900 p-3 rounded-2xl h-full">
                            <div>{{ $grid_4_button_text }}</div>
                            <div
                                class="w-10 h-10 bg-gray-700 text-white flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row-span-2 col-start-4 row-start-2">
                <a href="#"
                   class="relative flex h-full w-full rounded-2xl before:content-[''] before:absolute before:inset-0 before:bg-black/50 before:rounded-2xl"
                   style="background: url('/storage/{{ $grid_5_image }}'); background-size: cover;">
                    <h1 class="absolute bottom-5 left-3 text-2xl text-white">
                        {{ $grid_5_title }}
                    </h1>
                </a>
            </div>
            <div class="row-span-2 col-start-5 row-start-1">
                <div
                    class="bg-secondary text-primary flex flex-col justify-between items-center rounded-2xl pt-20 h-full">
                    <img src="/storage/{{ $grid_6_image }}" alt="">
                    <div class="p-3 w-full mt-10">
                        <div class="w-full">
                            <a href="{{ $grid_6_button_url }}"
                               class="flex justify-between items-center bg-light-yellow text-primary p-3 rounded-2xl h-full">
                                <div>{{ $grid_6_button_text }}</div>
                                <div
                                    class="w-10 h-10 bg-primary text-light-yellow flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-start-5 row-start-3">
                <div
                    class="bg-primary text-secondary flex justify-between items-center px-5 py-10 rounded-2xl h-full">
                    @if(!$grid_7_icon)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-20 h-20 mr-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>
                        </svg>
                    @else
                        <x-icon name="{{ $grid_7_icon }}" class="w-20 h-20 mr-5" />
                    @endif
                    <div class="text-xl">
                       {{ $grid_7_text }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container md:hidden mt-16">
        <div class="grid grid-cols-2 grid-rows-7 gap-4">
            <div class="row-span-2">
                <div class="bg-primary text-white flex flex-col justify-between rounded-2xl pt-20 h-full">
                    <h1 class="text-5xl text-white p-3 font-bold">{{ $grid_1_percentage }}</h1>
                    <p class="text-md text-white p-3">{{ $grid_1_text }}</p>
                    <div class="p-3 w-full mt-10">
                        <div class="w-full">
                            <a href="{{ $grid_1_button_url }}"
                               class="flex justify-between items-center bg-[#6dc4a880] text-white p-3 rounded-2xl h-full">
                                <div>{{ $grid_1_button_text }}</div>
                                <div
                                    class="w-10 h-10 bg-secondary text-white flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-start-1 row-start-3">
                <div class="bg-gray-800 text-white flex justify-between items-center px-5 py-10 rounded-2xl h-full">
                    @if(!$grid_2_icon)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-20 h-20 mr-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z"/>
                        </svg>
                    @else
                        <x-icon name="{{ $grid_2_icon }}" class="w-20 h-20 mr-5" />
                    @endif

                    <div class="text-xl">
                        {{ $grid_2_text }}
                    </div>
                </div>
            </div>
            <div class="row-span-3 col-start-2 row-start-1">
                <a href="#"
                   class="relative flex h-full w-full rounded-2xl before:content-[''] before:absolute before:inset-0 before:bg-black/50 before:rounded-2xl"
                   style="background: url('/storage/{{ $grid_3_image }}') left center; background-size: cover;">
                    <h1 class="absolute bottom-5 left-3 text-2xl text-white">
                        {{ $grid_3_title }}
                    </h1>
                </a>
            </div>
            <div class="row-span-2 col-start-2 row-start-4">
                <div
                    class="bg-secondary text-primary flex flex-col justify-between items-center rounded-2xl pt-20 h-full">
                    <img src="/storage/{{ $grid_6_image }}" alt="">
                    <div class="p-3 w-full mt-10">
                        <div class="w-full">
                            <a href="{{ $grid_6_button_url }}"
                               class="flex justify-between items-center bg-light-yellow text-primary p-3 rounded-2xl h-full">
                                <div>{{ $grid_6_button_text }}</div>
                                <div
                                    class="w-10 h-10 bg-primary text-light-yellow flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-start-2 row-start-6">
                <div
                    class="bg-primary text-secondary flex justify-between items-center px-5 py-10 rounded-2xl h-full">
                    @if(!$grid_7_icon)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-20 h-20 mr-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>
                        </svg>
                    @else
                        <x-icon name="{{ $grid_7_icon }}" class="w-20 h-20 mr-5" />
                    @endif
                    <div class="text-xl">
                        {{ $grid_7_text }}
                    </div>
                </div>
            </div>
            <div class="row-span-3 col-start-1 row-start-4">
                <a href="#"
                   class="relative flex h-full w-full rounded-2xl before:content-[''] before:absolute before:inset-0 before:bg-black/50 before:rounded-2xl"
                   style="background: url('/storage/{{ $grid_5_image }}'); background-size: cover;">
                    <h1 class="absolute bottom-5 left-3 text-2xl text-white">
                        {{ $grid_5_title }}
                    </h1>
                </a>
            </div>
            <div class="col-span-2 row-start-7">
                <div
                    class="bg-gray-300 text-gray-800 flex flex-col justify-between items-center pt-10 rounded-2xl h-full">
                    <h1 class="text-2xl text-center mb-4">{{ $grid_4_title }}</h1>
                    <div class="w-full p-3">
                        <a href="{{ $grid_4_button_url }}"
                           class="flex justify-between items-center bg-gray-500 text-gray-900 p-3 rounded-2xl h-full">
                            <div>{{ $grid_4_button_text }}</div>
                            <div
                                class="w-10 h-10 bg-gray-700 text-white flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
