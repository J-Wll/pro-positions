<x-layout>
    <div class="space-y-15">
        <section class="my-20 text-center">
            <h1 class="font-bold text-5xl">Let's Find Your Next Job</h1>

            <x-forms.form action="/search">
                <x-forms.input placeholder="Web Developer..." :label="false" name="q"
                    class="rounded-xl bg-white/8 border border-white/50 mt-6 pl-4 pr-6 py-3 w-full max-w-2xl hover:border-white/90 transition-colors duration-200"/>
            </x-forms.form>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-4">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-4 space-x-2 space-y-2">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach

            </div>
        </section>

        <section class="">
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-4 space-y-8">
                @foreach ($jobs as $job)
                    <x-wide-job-card :job="$job" />
                @endforeach
            </div>


        </section>
    </div>

</x-layout>
