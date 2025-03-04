@props(['job'])

<x-card-style class="flex flex-col text-center">
    <div class="self-start"><a href="/employers/{{$job->employer->name}}">{{ $job->employer->name }}</a></div>
    <div class="py-6">
        <h3 class="text-xl font-bold group-hover:text-blue-500 transition-colors duration-200">
            <a href="{{ $job->url }}" target="_blank">{{ $job->title }}</a>
        </h3>
        <p class="mt-2">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-3 overflow-hidden text-nowrap lg:max-w-54">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach

        </div>

        <x-employer-logo :logo="$job->employer->logo" :width="45" />
    </div>
</x-card-style>
