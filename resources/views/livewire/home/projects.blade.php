<div>
    <div class="owl-carousel owl-theme">
        @foreach($projects as $project)
            <div class="item">
                <a href="{{ route('projects.project', $project->id) }}"
                   class="inline-block border border-gray-200 rounded-lg p-3">
                    <img src="/storage/{{ $project->cover }}" class="rounded-lg w-full" alt="">
                    <h1 class="text-3xl font-bold mt-3">{{ $project->title }}</h1>
                    <p class="text-gray-500 mt-3">{!! Str::limit($project->description, 150)  !!}</p>
                    <div>
                        <div class="flex text-md">
                            <div class="font-bold mr-2">OMR {{ (int) $project->donations->sum('amount') / 1000 }}</div>
                            <div>Raised of OMR {{ $project->budget }} </div>
                        </div>
                        <div class="w-full h-4 mb-4 bg-gray-200 rounded-full mt-3">
                            <div class="h-4 bg-secondary rounded-full "
                                 style="width: {{ ($project->donations->sum('amount') / 1000) / $project->budget * 100 }}%"></div>
                        </div>
                        <div class="flex items-center justify-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="w-6 h-6 text-rose-600">
                                <path
                                    d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z"/>
                            </svg>
                            <div class="text-sm">
                                <span class="font-bold">{{ $project->donations->count() }}</span> Donaiters
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


