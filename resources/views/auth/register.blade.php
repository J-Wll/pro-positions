<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" placeholder="John Doe" />
        <x-forms.input label="Email" name="email" type="email" placeholder="JohnDoe@example.com" />
        <x-forms.input label="Password" name="password" type="password" placeholder="******************" />
        <x-forms.input label="Confirm Password" name="password_confirmation" type="password"
            placeholder="******************" />

        <x-forms.divider />

        <x-forms.input label="Company/Employer Name" name="employer" placeholder="John Doe" />
        <x-forms.input label="Company/Logo Logo" name="logo" type="file" placeholder="John Doe"
            class=" file:mr-3 file:py-2 file:px-3 file:border-[1px] file:text-sm file:bg-stone-50 file:text-black
   hover:file:cursor-pointer hover:file:bg-blue-50
   hover:file:text-blue-700" />

        <x-forms.button>Submit</x-forms.button>

    </x-forms.form>
</x-layout>
