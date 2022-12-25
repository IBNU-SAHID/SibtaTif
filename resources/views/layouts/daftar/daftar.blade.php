<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Daftar | @yield('title')</title>
</head>
<body class=" max-sm:max-w-full">
    <section >
        <div class="">
            {{-- bagian 1 --}}
            <div class="w-1/2 max-sm:w-screen  mt-4 mx-auto p-4 max-sm: text-center bg-white border rounded-t-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-600 dark:text-white">Form Pendaftaran <br> <span class="text-info-500">@yield('user')</span> </h5>
                
            </div>

            @yield('content')
            
        </div>
    </section>
    <script src="/js/formDaftar.js"></script>
</body>
</html>