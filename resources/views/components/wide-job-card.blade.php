@props(['job'])

<x-card-style class="flex flex-row gap-x-6">
    <x-employer-logo />
    <div class="font-bold flex-1 flex flex-col">
        <a href="#" class="text-gray-400 text-sm">{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-1 group-hover:text-blue-500 transition-colors duration-200">{{$job->title}}
        </h3>
        <p class="text-gray-400 text-sm mt-auto">{{$job->salary}}</p>
    </div>
    <div>
        <div class="space-x-4">
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach
        </div>

    </div>
</x-card-style>
