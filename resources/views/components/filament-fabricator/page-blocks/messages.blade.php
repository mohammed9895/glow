@aware(['page'])
@props([
    'first_line',
    'second_line',
])
<div class="mt-64">
    <div class="relative flex overflow-x-hidden h-32 w-full bg-primary -rotate-1">
        <div class="py-12 whitespace-nowrap animate-marquee">
            <span class="mx-4 font-bold text-4xl text-white">{{ $first_line }}</span>
        </div>
    </div>
    <div class="relative flex overflow-x-hidden h-32 w-full bg-secondary rotate-1">
        <div class="py-12 whitespace-nowrap animate-marquee">
            <span class="mx-4 font-bold text-4xl text-primary">{{ $second_line }}</span>
        </div>
    </div>
</div>
