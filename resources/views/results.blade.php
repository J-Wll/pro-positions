@props(['heading' => 'Search Results'])

<x-layout>
    <x-page-heading>{{$heading}}</x-page-heading>

    <div class="mt-4 space-y-8">
        @foreach ($jobs as $job)
            <x-wide-job-card :job="$job" />
        @endforeach
    </div>
    </x-layo>
