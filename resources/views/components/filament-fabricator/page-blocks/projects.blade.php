@aware(['page'])
@props([
    'title',
    'number_of_projects',
])
<div class="container mt-52">
    <div class="flex flex-col mb-8 md:flex-row md:justify-between md:items-center md:mb-20">
        <div><h1 class="text-5xl font-bold">{{ $title }}</h1></div>
        <div class="flex mt-10 space-x-3">
            <button
                class="flex items-center justify-center w-16 h-16 border-2 border-gray-900 rounded-full customNextBtn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
                </svg>
            </button>
            <button
                class="flex items-center justify-center w-16 h-16 border-2 border-gray-900 rounded-full customPrevBtn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                </svg>
            </button>
        </div>
    </div>
    <livewire:home.projects :number_of_projects="$number_of_projects" />
</div>
