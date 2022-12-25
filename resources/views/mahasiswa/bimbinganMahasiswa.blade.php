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
                
                <a href="/logout"
                    class="flex p-2 rounded border-2 border-danger-600 outline-3 text-sm font-medium text-danger-600  hover:bg-danger-600 hover:text-gray-100 focus:border-danger-3 00">
                    <svg class="w-6 h-6 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    <span class="flex-1 ml-1 whitespace-nowrap max-sm:hidden">Keluar</span>
                </a>
            </div>
        </div>
    </nav>

    {{-- data mahasiswa --}}
    <div
        class="w-full max-sm:w-screen  mx-auto p-4 max-sm:text-center bg-white  shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-wrap md:justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
            <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-900 dark:text-white">
                Bimbingan Tugas Akhir
            </h5>
            <div class="flex flex-row ">
                <div>
                    <button
                        class="block max-sm:hidden text-white bg-danger-500 hover:bg-danger-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="popup-modal">
                        <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        <span class="ml-1 max-sm:hidden">Selesai Bimbingan </span>
                    </button>

                    <div id="popup-modal" tabindex="-1"
                        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-md md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                    data-modal-toggle="popup-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <svg aria-hidden="true"
                                        class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                        Apakah Tahap Bimbingan TA Anda Sudah selesai?</h3>

                                    <a href="/mahasiswa/selesai" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">      
                                            Ya<span class="max-sm:hidden">, selesai</span> 
                                    </a>

                                    
                                    <button data-modal-toggle="popup-modal" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                        Tidak <span class="max-sm:hidden">, Belum Selesai</span> </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ml-2 flex items-center max-sm:hidden">
                    <a href="{{ route('download', $mahasiswa->nim, $mahasiswa->nama) }}"
                        class="block text-white bg-info-500 hover:bg-info-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px- py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <div class="flex flex-wrap px-4">
                            <div>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                        clip-rule="evenodd"></path>
                                </svg>

                            </div>
                            <div>
                                <span class="ml-1 max-sm:hidden">Unduh Form Bimbingan TA</span>
                            </div>

                        </div>
                    </a>
                </div>

            </div>
            
        </div>
        <hr class=" mb-3 py-0.5 bg-info-500 ">
        <div class="flex flex-row max-sm:flex-col">
            <div class="basis-1/3 pr-4 mt-8 max-sm:mt-2 max-sm:text-left">
                <p class="font-bold">
                    Nama
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->nama }}
                </p>
                <p class="font-bold mt-2">
                    NIM
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->nim }}
                </p>
                <p class="font-bold mt-2">
                    Jurusan
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->jurusan }}
                </p>
                <p class="font-bold mt-2">
                    Judul Tugas Akhir
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->info_ta['judul'] }}
                </p>
                <p class="font-bold mt-2">
                    Dosen Pembimbing 1
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    @if ($pembimbing1 != null)
                        {{ $pembimbing1[0]['nama'] }}
                    @else
                        -
                    @endif
                </p>
                <p class="font-bold mt-2">
                    Dosen Pembimbing 2
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    @if ($pembimbing2 != null)
                        {{ $pembimbing2[0]['nama'] }}
                    @else
                        -
                    @endif
                </p>
            </div>
            <hr class="mt-3  py-0.5 bg-info-500 md:hidden">
            <div class="flex flex-row mt-4 md:hidden ">
                <div class="basis-2/3">
                    <p class="font-bold text-left mt-2 text-info-500">
                        Riwayat Bimbingan
                    </p>
                </div>
                <div class="">
                    <button
                        class="block text-white bg-danger-500 hover:bg-danger-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="popup-modal">
                        <svg class="w-5 h-5 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                    </button>

                </div>
                <div class="ml-2 flex ">
                    <a href="{{ route('download', $mahasiswa->nim, $mahasiswa->nama) }}"
                        class="block text-white bg-info-500 hover:bg-info-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <div class="flex flex-wrap px-2">
                            <div>
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                        clip-rule="evenodd"></path>
                                </svg>

                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <hr class="mt-3 mb-3 py-0.5 bg-info-500 md:hidden">
            <div class="basis-3/4 ">
                <div class="flex flex-row mb-2">
                    <div class="basis-4/5">

                    </div>
                    <div class="basis-auto">
                        <div></div>
                        <!-- Modal toggle -->
                        <button
                            class="block text-white bg-success-500 hover:bg-succes-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px- py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="authentication-modal">
                            <div class="flex flex-wrap px-4">
                                <div>
                                    <svg class="w-6 h-6 " fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>

                                </div>
                                <div>
                                    <span class="ml-1 max-sm:hidden max-sm:mt-4">Buat Catatan</span>
                                </div>

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
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                        <table
                            class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-gray-900">
                            <thead
                                class="text-xs text-gray-100 uppercase bg-info-400 dark:bg-gray-700 dark:text-gray-400">
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
                                @foreach ($riwayat as $r)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="py-4 px-6 w-10 border-2 border-gray-900">
                                            {{ $r->tanggal }}
                                        </td>
                                        <td class="py-4 px-6 w-80 border-2 border-gray-900">
                                            {{ $r->catatan }}
                                        </td>
                                        @if ($r->pembimbing_id == $pembimbing1[0]['nip'])
                                            @if ($r->status == 1)
                                                <td class="py-4 px-6 w-auto border-2 border-gray-900 ">
                                                    <div class="flex ">
                                                        <div>
                                                            <svg class="w-6 h-6  text-success-500" fill="currentColor"
                                                                viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
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
                                                            <svg class="w-6 h-6 text-danger-500" fill="currentColor"
                                                                viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="text-[12px]">Belum Dikonfirmasi</div>
                                                    </div>
                                                </td>
                                                <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                                </td>
                                            @endif
                                        @elseif ($r->pembimbing_id == $pembimbing2[0]['nip'])
                                            @if ($r->status == 1)
                                                <td class="py-4 px-6 w-auto border-2 border-gray-900">

                                                </td>
                                                <td class="py-4 px-6 w-auto border-2 border-gray-900">
                                                    <div class="flex ">
                                                        <div>
                                                            <svg class="w-6 h-6  text-success-500" fill="currentColor"
                                                                viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
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
                                                            <svg class="w-6 h-6 text-danger-500" fill="currentColor"
                                                                viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
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
                        <div class="mt-6">
                            {{ $riwayat->links() }}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

</body>

</html>
