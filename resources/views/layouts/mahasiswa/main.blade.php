<!DOCTYPE html>
<html lang="en" class="h-min-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title') </title>
</head>

<body class="">
    <div class="flex flex-row min-h-screen">
        <div id="sidebar" class="basis-auto bg-gray-800 max-sm:hidden ">
            {{-- sidebar terbuka --}}
            <section id="sidebar-buka" class="block  ">
                <ul>
                    <li>
                        <a href="#"
                            class=" bg-gray-100  flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
                            <img class="w-[68px] h-[68 px] mr-2" src="{{ asset('/img/logo/logo.png') }}" alt="logo">
                            SibTA
                        </a>
                    </li>
                    {{-- menu --}}
                    <li>
                        <aside class="w-64" aria-label="Sidebar">
                            <div class="overflow-y-auto py-4 px-3 bg-gray-800 rounded dark:bg-gray-800">
                                <ul class="space-y-2">
                                    {{-- untuk halo ke kordinator --}}
                                    <li>
                                        <p class="text-md text-gray-100 my-2">Halo! {{ Auth::user()->name }}</p>

                                    </li>
                                    <hr>
                                    <li>
                                        <a href="/dashboard"
                                            class="flex items-center p-2 text-base font-normal text-gray-100  rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-700 ">
                                            <svg aria-hidden="true"
                                                class="w-6 h-6 text-gray-100 transition duration-75 dark:text-gray-400 group-hover:text-gray-900"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                            </svg>
                                            <span class="ml-3">About Me</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/list-dosen"
                                            class="flex items-center p-2 text-base font-normal text-gray-100  rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-700 ">
                                            <svg aria-hidden="true"
                                                class="flex-shrink-0 w-6 h-6 text-gray-100 transition duration-75 dark:text-gray-400 dark:group-hover:text-white"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="ml-3" sidebar-toggle-item>Bimbingan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/list-mahasiswa"
                                            class="flex items-center p-2 text-base font-normal text-gray-100  rounded-lg dark:text-white hover:bg-gray-600 dark:hover:bg-gray-700 ">
                                            <img src="{{ asset('/img/icon/mhs.png') }}" />
                                            <span class="ml-3">Mahasiswa</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </li>
                </ul>
            </section>

        </div>

        <div class="basis-auto">

        </div>

        {{-- kanan --}}
        <div class="basis-full ">
            <section>
                <div class="flex flex-col">
                    <nav class="bg-white drop-shadow-lg border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
                        <div class="container flex flex-wrap items-center mx-auto md:place-content-between">
                            <div id="tutup-menu" class="">
                                <div class="hidden max-sm:block">
                                    <button data-collapse-toggle="navbar-sticky" type="button"
                                        class=" sm:block inline-flex content-end items-center p-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        aria-controls="navbar-sticky" aria-expanded="false">
                                        <span class="sr-only">Open main menu</span>
                                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="max-sm:hidden">
                                <a href=""
                                    class=" mt-1 flex p-2 text-base font-normal border-2 border-danger-500 text-danger-500 hover:text-gray-100 rounded-lg dark:text-white hover:bg-danger-600 dark:hover:bg-gray-700">
                                    <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    <span class="flex-1 ml-3">Keluar</span>
                                </a>
                            </div>



                            <div id="logo-nav" class="mx-auto md:hidden">
                                <a href="/"
                                    class="flex items-center  text-2xl font-semibold text-gray-900 dark:text-white">
                                    <img class="w-[52px] h-[52px] " src="{{ asset('/img/logo/logo.png') }}"
                                        alt="logo">
                                    SibTA
                                </a>
                            </div>

                        </div>
                        <div class="items-center justify-between hidden md:hidden  w-full md:flex md:w-auto md:order-1"
                            id="navbar-sticky">
                            <ul
                                class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                                <li>
                                    <a href="/dashboard"
                                        class="block py-2 pl-3 pr-4 text-gray-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                                        aria-current="page">Dashboard</a>
                                </li>
                                <li>
                                    <a href="/list-dosen"
                                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Dosen</a>
                                </li>
                                <li>
                                    <a href="/list-mahasiswa"
                                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Mahasiswa</a>
                                </li>
                                <li>

                                </li>
                            </ul>
                        </div>

                </div>
                </nav>
                {{-- conten --}}
                @yield('content')
        </div>
        </section>
    </div>
    <script src="{{ asset('/js/dashboard.js') }}"></script>
</body>

</html>
