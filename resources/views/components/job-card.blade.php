<x-card-style class="flex flex-col text-center">
    <div class="self-start">Employer Name</div>
    <div class="py-6">
        <h3 class="text-xl font-bold group-hover:text-blue-500 transition-colors duration-200">Title</h3>
        <p class="mt-2">Salary</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-4">
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
            <x-tag size="small">Tag</x-tag>
        </div>

        <x-employer-logo :width="40"/>
    </div>
</x-card-style>
