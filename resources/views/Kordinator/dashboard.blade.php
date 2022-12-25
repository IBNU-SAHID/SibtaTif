@extends('layouts.kordinator.main')

@section('title', 'Dashboard')

@section('content')
    {{-- CONTEN 1 --}}
    
    <div
        class="w-full  max-sm:w-screen p-4 max-sm: text-left bg-white  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-900 dark:text-white">
            Data Pengguna
        </h5>
        <hr class=" mb-3 py-0.5 bg-info-500 ">

        <div class="flex flex-row max-sm:flex-col">

            <div class="">
                <a href="/list-dosen"
                    class="block max-w-sm p-6 bg-success-500 border border-gray-200 rounded-lg shadow-md hover:bg-success-600 ">
                    <h5 class="mb-2 text-left text-5xl font-bold tracking-tight text-gray-100 dark:text-white">
                        {{$jumlahDosen}}</h5>
                    <p class="font-normal text-gray-100 dark:text-gray-400">Jumlah
                        Dosen Pembimbing
                    </p>
                </a>
            </div>

            {{-- mahasiswa --}}
            <div class="md:ml-4">
                <a href="/list-mahasiswa"
                    class="block md: max-w-sm p-6  bg-info-500 border border-gray-200 rounded-lg shadow-md hover:bg-info-600 ">
                    <h5 class="mb-2 text-left text-5xl font-bold tracking-tight text-gray-100 dark:text-white">
                        {{$jumlahMahasiswa}}</h5>
                    <p class="font-normal text-gray-100 dark:text-gray-400">Mahasiswa
                        Sedang Bimbingan
                    </p>
                </a>
            </div>


        </div>

    </div>


@endSection
