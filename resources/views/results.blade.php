
<x-layout>
    <x-page-heading>Search Results</x-page-heading>

    <div class="mt-4 space-y-8">
        @foreach ($jobs as $job)
            <x-wide-job-card :job="$job" />
        @endforeach
    </div>
</x-layout>
