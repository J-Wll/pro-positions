<x-layout>
    <x-page-heading>Create a Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Title" name="title" placeholder="Web Developer"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Manchester, England"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="£30,000"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option class="text-black">Full time</option>
            <option class="text-black">Part time</option>
        </x-forms.select>

        <x-forms.input label="External URL (Your Companies page)" name="url"
            placeholder="https://examplejob.com/this-position"></x-forms.input>

        <x-forms.input label="Tags (comma separated)" name="tags"
            placeholder="Frontend, Backend, Fullstack"></x-forms.input>

        <x-forms.checkbox :label="false" checkboxText="Add to featured (Extra Cost)" name="Featured" />


        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
