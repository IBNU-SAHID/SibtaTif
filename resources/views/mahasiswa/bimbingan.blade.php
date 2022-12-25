<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>mahasiswa</title>
</head>

<body class="bg-gray-200">
    <nav class="bg-white border-gray-200 drop-shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <a href="/mahasiswa" class="flex items-center">
                <img class="w-[52px] h-[52px] " src="{{ asset('/img/logo/logo.png') }}" alt="logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Sibta</span>
            </a>
            <div class="flex items-center">
                <a href="#"
                    class="flex p-2 rounded border-2 border-danger-600 outline-3 text-sm font-medium text-danger-600  hover:bg-danger-600 hover:text-gray-100 focus:border-danger-3 00">
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

    {{-- data mahasiswa --}}
    <div
        class="w-2/3 max-sm:w-screen  mt-2 mx-auto p-4 max-sm: text-center bg-white border rounded-r-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h1 class=" font-bold text-xl mb-8">Formulir Bimbing TA</h1>

        <p class="text-left mb-2 text-gray-900">Saya yang bertanda tangan dibawah ini:</p>
        {{-- Nama --}}
        <div class="flex flex-row">
            <div class="basis-1/4 item bg-info-400 p-1 border border-1 border-gray-300">
                <p class="pl-2 text-left text-md font-semibold text-white">
                    Nama
                </p>
            </div>
            <div class="basis-3/4 ">
                <input type="text" id="disabled-input" aria-label="disabled input"
                    class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ Auth::user()->name }}" disabled>

            </div>
        </div>

        {{-- NIM dan Jurusan --}}
        <div class="flex flex-row">
            {{-- NIM --}}
            <div class="basis-1/4 item bg-info-400 p-1 border border-1 border-gray-300">
                <p class="pl-2 text-left text-md font-semibold text-white">
                    NIM
                </p>
            </div>
            <div class="basis-1/4">
                <input type="text" id="disabled-input" aria-label="disabled input"
                    class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $mahasiswa->nim }}" disabled>

            </div>
            {{-- Jurusan --}}
            <div class="basis-1/4 item bg-info-400 p-1 border border-1 border-gray-300">
                <p class="pl-2 text-left text-md font-semibold text-white">
                    Jurusan
                </p>
            </div>
            <div class="basis-1/4">
                <input type="text" id="disabled-input" aria-label="disabled input"
                    class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ $mahasiswa->jurusan }}" disabled>
            </div>
        </div>

        {{-- Judul --}}
        <div class="basis-1/4 item bg-info-400 p-1 border border-1 border-gray-300">
            <p class="pl-2 text-left text-md font-semibold text-white">
                Judul TA
            </p>
        </div>
        <div class="basis-3/4 ">
            <textarea id="message" rows="4"
                class="block p-2.5 h-20 w-full  text-sm text-gray-900 bg-gray-50  border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                disabled>{{ $mahasiswa->info_ta['judul'] }}</textarea>


        </div>

        {{-- Pembimbing 1 dan Pembimbing 2 --}}
        <div class="flex flex-row">
            <div class="basis-1/2">
                {{-- Pembimbing 1 --}}
                <div class="item bg-info-400 p-1 border border-1 border-gray-300">
                    <p class="pl-2 text-left text-md font-semibold text-white">
                        Pembimbing 1
                    </p>
                </div>
                <input type="text" id="disabled-input" aria-label="disabled input"
                    class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    @if ($pembimbing1 != null) value="{{ $pembimbing1[0]['nama'] }}"
                    @else
                    value="" @endif
                    disabled>

            </div>

            <div class="basis-1/2">
                {{-- pembimbing 2 --}}
                <div class="item bg-info-400 p-1 border border-1 border-gray-300">
                    <p class="pl-2 text-left text-md font-semibold text-white">
                        Pembimbing 2
                    </p>
                </div>
                <input type="text" id="disabled-input" aria-label="disabled input"
                    class=" bg-gray-100 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    @if ($pembimbing2 != null) value="{{ $pembimbing2[0]['nama'] }}"
                    @else
                    value="" @endif
                    disabled>

            </div>



        </div>
    </div>
    {{-- History Bimbingan --}}

    <div
        class="w-2/3 max-sm:w-screen mx-auto p-4 max-sm: text-center bg-white border rounded-b-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-row mb-2">
            <div class="basis-4/5">

            </div>
            <div class="basis-auto">


                <!-- Modal toggle -->
                <button
                    class="block text-white bg-success-500 hover:bg-succes-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="authentication-modal">
                    <div class="flex flex-wrap">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                            </path>
                        </svg>
                        <span class="ml-1">Buat Catatan</span>
                    </div>

                </button>

                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                data-modal-toggle="authentication-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8 text-left">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Buat Catatan
                                    Bimbingan
                                </h3>

                                <form class="space-y-6" action="/mahasiswa/bimbingan/store" method="post">
                                    @csrf
                                    <div>
                                        <label for="tanggal"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                        <div class="relative">
                                            <div
                                                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true"
                                                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <input datepicker type="text" id="tanggal" name="tanggal"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Tanggal Bimbingan">
                                        </div>

                                    </div>
                                    <div>

                                        <label for="catatan"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Catatan Bimbingan</label>
                                        <textarea id="catatan" rows="4" name="catatan"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Write your thoughts here..."></textarea>

                                    </div>
                                    <div>
                                        <label for="pembimbing"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Pembimbing
                                        </label>
                                        <select id="pembimbing" name="pembimbing"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                            @if ($pembimbing1 != null)
                                                <option value="{{ $pembimbing1[0]['nip'] }}">
                                                    {{ $pembimbing1[0]['nama'] }}
                                                </option>
                                            @endif

                                            @if ($pembimbing2 != null)
                                                <option value="{{ $pembimbing2[0]['nip'] }}">
                                                    {{ $pembimbing2[0]['nama'] }}
                                                </option>
                                            @endif
                                        </select>
                                    </div>

                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div>

            <div class="overflow-x-auto relative">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-gray-900">
                    <thead class="text-xs text-gray-100 uppercase bg-info-400 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6 w-10 border-2 border-gray-900 ">
                                Tanggal
                            </th>
                            <th scope="col" class="py-3 px-6 w-80 border-2 border-gray-900 ">
                                CATATAN BIMBINGAN
                            </th>
                            <th scope="col" class="py-3 px-6 w-auto border-2 border-gray-900 ">
                                Pembimbing 1
                            </th>
                            <th scope="col" class="py-3 px-6 w-auto border-2 border-gray-900 ">
                                Pembimbing 2
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayat as $riwayat)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6 w-10 border-2 border-gray-900">
                                    {{ $riwayat->tanggal }}
                                </td>
                                <td class="py-4 px-6 w-80 border-2 border-gray-900">
                                    {{ $riwayat->catatan }}
                                </td>
                                @if ($riwayat->pembimbing_id == $pembimbing1[0]['nip'])
                                    @if ($riwayat->status == 1)
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900 ">
                                            <div class="flex ">
                                                <div>
                                                    <svg class="w-6 h-6  text-success-500" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div class="text-[12px]">Dikonfirmasi</div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                        </td>
                                    @else
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900">
                                            <div class="flex ">
                                                <div>
                                                    <svg class="w-6 h-6 text-danger-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                </div>
                                                <div class="text-[12px]">Belum Dikonfirmasi</div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                        </td>
                                    @endif
                                @elseif ($riwayat->pembimbing_id == $pembimbing2[0]['nip'])
                                    @if ($riwayat->status == 1)
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                        </td>
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900">
                                            <div class="flex ">
                                                <div>
                                                    <svg class="w-6 h-6  text-success-500" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <div class="text-[12px]">Dikonfirmasi</div>
                                            </div>
                                        </td>
                                    @else
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                        </td>
                                        <td class="py-4 px-6 w-auto border-2 border-gray-900">
                                            <div class="flex ">
                                                <div>
                                                    <svg class="w-6 h-6 text-danger-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                </div>
                                                <div class="text-[12px]">Belum Dikonfirmasi</div>
                                            </div>
                                        </td>
                                    @endif
                                @else
                                    <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                    </td>
                                    <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                    </td>
                                @endif
                        @endforeach

                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

</body>

</html>
