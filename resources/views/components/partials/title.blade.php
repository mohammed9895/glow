@props(['title', 'description'])
<div style="background-image: radial-gradient(circle at top, #f3fbda, #fff 20%);">
    <div class="max-w-4xl mx-auto text-center pt-24">
        <h1 class="text-5xl font-bold text-gray-800 mb-7 leading-relaxed">{{ $title }}</h1>
        <p>{{ $description ?? '' }}</p>
    </div>
</div>
