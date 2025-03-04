@props(['logo', 'width' => 90])

@php
    // default placeholder image for no specified logo. for seeding
    $logoWithBackup = asset($logo) ?? 'http://picsum.photos/seed/' . rand(1, 1000000) . "/$width";
@endphp

<div>
    <img src={{ asset($logoWithBackup) }} alt="" class="rounded-xl aspect-square" width={{ $width }}
        height={{ $width }} >
</div>
