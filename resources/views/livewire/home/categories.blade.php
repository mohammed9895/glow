<div>
    <x-partials.title title="Categories" />

    <div class="container mt-36">
        <div class="grid grid-cols-4 gap-5">
           @foreach($categories as $category)
                <a href="{{ route('categories.category', $category->id) }}" class="relative border border-gray-300 shadow p-10 flex flex-col justify-center items-center rounded-2xl">
                    @if($category->icon == NULL)
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-secondary mb-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                        </svg>
                        @else
                        <x-icon name="{{ $category->icon }}" class="w-24 h-24 text-secondary mb-5" />
                    @endif
                    <h1 class="text-3xl font-bold">{{ $category->name }}</h1>
                    <div class="flex items-center justify-center h-10 w-10 rounded-full bg-secondary text-white absolute -top-5 -right-5">
                        {{ $category->projects->count() }}
                    </div>
                </a>
           @endforeach
        </div>
    </div>

</div>
