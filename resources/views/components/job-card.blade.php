@props(["job"])

<x-card-style class="flex flex-col text-center">
    <div class="self-start">{{$job->employer->name}}</div>
    <div class="py-6">
        <h3 class="text-xl font-bold group-hover:text-blue-500 transition-colors duration-200">{{$job->title}}</h3>
        <p class="mt-2">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-4 overflow-hidden text-nowrap">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach

        </div>

        <x-employer-logo :width="45" />
    </div>
</x-card-style>
