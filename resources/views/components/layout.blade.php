<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-gray-900 text-white px-14 font-hanken-grotesk mb-8 mx-auto max-w-[1300px]">
    <div class="">
        <nav class="flex justify-between items-center py-5 border-b border-white/20">
            @auth
            <div class="min-w-[147px]  max-h-[29px]">
            @endauth

            @guest
            <div class="min-w-[118px]  max-h-[29px]">   
            @endguest
            
                <a href="/" class="max-w-[92px] inline-block">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-8 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            @auth
                <div class="space-x-5">
                    <a href="/jobs/create">Post a job</a>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        <x-link-button>Log out</x-link-button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-5">
                    <a href="/register">Sign up</a>
                    <a href="/login">Log in</a>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[1000px] mx-auto">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
