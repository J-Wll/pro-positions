@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 rounded-xl hover:bg-white/25 transition-colors duration-200';
    if ($size == 'base') {
        $classes .= ' px-4 py-2';
    }
    if ($size == 'small') {
        $classes .= ' px-3 py-1 text-sm';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">
    {{ $tag -> name }}
</a>
