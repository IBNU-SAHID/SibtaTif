<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body class="bg-gray-200">
    <nav class="bg-white border-gray-200 drop-shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="/mahasiswa" class="flex items-center">
                <img class="w-[52px] h-[52px] " src="{{ asset('/img/logo/logo.png') }}" alt="logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Sibta</span>
            </a>
            <div class="flex items-center">
                <a href="#" class="flex p-2 rounded border-2 border-danger-600 outline-3 text-sm font-medium text-danger-600  hover:bg-danger-600 hover:text-gray-100 focus:border-danger-3 00">
                    <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    <span class="flex-1 ml-1 whitespace-nowrap">Keluar</span>
                </a>
            </div>
        </div>
    </nav>

    @yield('content')

</body>

</html>
