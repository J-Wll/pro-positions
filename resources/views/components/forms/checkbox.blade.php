@props(['label', 'name', "checkboxText"])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name),
        "class" => "min-w-[21px] min-h-[21px] align-sub"
    ];
@endphp

<x-forms.field :$label :$name>
    <div class="">
        <input {{ $attributes($defaults) }}>
        <span class="pl-1">{{ $checkboxText }}</span>
    </div>
</x-forms.field>

