@aware(['page'])
@props([
    'title',
    'icon',
    'description',
    'questions',
    'email',
])
<div class="container mt-52 rounded-2xl bg-light-yellow flex flex-col justify-center items-center pb-20">
    <div class="bg-secondary w-32 h-32 rounded-full text-center relative -mt-16">
        <img src="/storage/{{ $icon }}" class="absolute -top-1/4 right-0" width="100" alt="">
    </div>

    <div class="mt-10 text-center mb-16">
        <h1 class="text-5xl">{{ $title }}</h1>
        <p class="mt-5">{{ $description }}<a class="underline" href="mailto:{{ $email }}"> {{ $email }}</a></p>
    </div>
    @foreach($questions as $question)
        @if($loop->first)
            <div class="w-full border-b border-gray-400/20 py-3" x-data="{open: true}">
                <div class="flex justify-between">
                    <h3 class="text-2xl text-primary">{{ $question['question'] }}</h3>
                    <button @click="open = !(open)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </button>
                </div>
                <p class="leading-relaxed mt-5" x-show="open">
                    {{ $question['answer'] }}
                </p>
            </div>
        @endif
            <div class="w-full border-b border-gray-400/20 py-3" x-data="{open: false}">
                <div class="flex justify-between">
                    <h3 class="text-2xl text-primary">{{ $question['question'] }}</h3>
                    <button @click="open = !(open)">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="open">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary" x-show="!open">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </button>
                </div>
                <p class="leading-relaxed mt-5" x-show="open">
                    {{ $question['answer'] }}
                </p>
            </div>
    @endforeach
</div>
