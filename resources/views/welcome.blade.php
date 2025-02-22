<x-layout>
    <div class="space-y-15">
        <section class="my-20 text-center">
            <h1 class="font-bold text-5xl">Let's Find Your Next Job</h1>

            <form action="">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/8 border border-white/50 mt-6 pl-4 pr-6 py-3 w-full max-w-2xl" >
            </form>
        </section>

        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-4">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-4 space-x-4">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section class="">
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-4 space-y-8">
                <x-wide-job-card/>
                <x-wide-job-card/>
                <x-wide-job-card/>
            </div>


        </section>
    </div>

</x-layout>
