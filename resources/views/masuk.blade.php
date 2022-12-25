<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Sibta</title>
</head>

<body class=" max-sm:bg-primary-100 ">
    <div class="flex flex-row">
        <div class="basis-2/3  bg-slate-400 max-sm:hidden ">
            <section class="bg-primary-100 dark:bg-gray-900">
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                    <h1 class="text-4xl font-bold mt-5">Sistem Bimbingan Tugas Akhir</h1>
                    <h2 class="text-2xl text-gray-600  mt-1 ">Teknik Informatika - UIN Suska Riau</h2>
                    <img class="w-90" src="{{ asset('/img/layout/consultasi.png') }}" alt="logo"
                        class="w-1/2 mt-8">
                </div>
            </section>
        </div>
        <div class="basis-1/3 max-sm:basis-full  ">
            <section class="bg-gray-100 dark:bg-gray-900 max-sm:bg-primary-100">
                <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                    <a href="/"
                        class="flex items-center mb-6 text-4xl font-semibold text-gray-900 dark:text-white">
                        <img class="w-20 h-20 mr-2" src="{{ asset('/img/logo/logo.png') }}" alt="logo">
                        Sibta
                    </a>
                    <div
                        class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md max-sm:mt-5 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                            @if(session()->has('loginError'))
                                <div class="bg-red-100 border border-danger-400 text-danger-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Login Gagal!</strong>
                                    <br>
                                    <span class="block sm:inline">{{ session()->get('loginError') }}</span>
                                </div>
                            @endif
                            @if(session()->has('success'))
                                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Berhasil!</strong>
                                    <span class="block sm:inline">{{ session()->get('success') }}</span>
                                </div>
                            @endif
                            <h1
                                class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                Silahkan login di sini.
                            </h1>

                            <form class="space-y-4 md:space-y-6" action="/" method="post">
                                @csrf
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                    <input type="text" name="username" id="username"
                                        class=" bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Username Anda" required="">
                                    @error('username')
                                        <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400">
                                            <span class="font-medium">{{ $message }}</span> </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Password Anda"
                                        class="validasi-colom bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        required="">
                                </div>

                                <button type="submit"
                                    class="mt-3 w-full text-white bg-info-500 hover:bg-info-600 focus:ring-4 focus:outline-none focus:ring-info-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-info-600 dark:hover:bg-info-700 dark:focus:ring-info-800">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</body>

</html>
