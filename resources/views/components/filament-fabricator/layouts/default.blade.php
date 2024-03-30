@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    <x-partials.nav/>

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

    <x-partials.footer />
</x-filament-fabricator::layouts.base>
