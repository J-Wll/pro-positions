<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" placeholder="JohnDoe@example.com" />
        <x-forms.input label="Password" name="password" type="password" placeholder="******************" />

        <x-forms.button>Submit</x-forms.button>

    </x-forms.form>
</x-layout>
