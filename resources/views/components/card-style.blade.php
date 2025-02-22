@php
    $classes =
        'p-5 bg-white/8 rounded-xl border border-transparent hover:border-blue-600 group transition-colors duration-200';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
