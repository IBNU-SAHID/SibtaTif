@extends('layouts.kordinator.main')

@section('title', 'Data Dosen')

@section('content')

    <div class="w-full max-sm:w-screen px-4 py-1 max-sm: text-left bg-white sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="my-2">
            <a href="{{ url()->previous() }}" class="flex flex-wrap text-info-500 hover:text-info-800 dark:text-gray-400">
                <svg class="w-6 h-6 text-info-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="ml-2">Kembali</span>
                
            </a>
        </div>
        <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-900 dark:text-white">
            Data Dosen
        </h5>
        <hr class=" mb-3 py-0.5 bg-info-500 ">
        <div class="flex flex-row max-sm:flex-col">
            <div class="basis-1/3">

                <p class="font-bold">
                    Nama
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $dosen->nama }}
                </p>
                <p class="font-bold">
                    NIM
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $dosen->nip }}
                </p>
                <p class="font-bold">
                    Jurusan
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $dosen->jurusan }}
                </p>
                <p class="font-bold">
                    Jenis Kelamin
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $dosen->jenisKelamin }}
                </p>
                <p class="font-bold">
                    Telepon
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $dosen->telepon }}
                </p>
                <p class="font-bold">
                    Email
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $dosen->email }}
                </p>

            </div>
            <div>
                <p class="font-bold my-1">
                    Mahasiswa Bimbingan
                </p>

                <div class=" mt-4 overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-100 uppercase bg-info-500 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Nama
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Nim
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Status Pembimbing
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Jumlah Bimbingan
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data->count() == 0)
                        <tr>
                            <td colspan="5" class="py-4 px-6 text-center">
                                Tidak ada data mahasiswa bimbingan
                            </td>
                        </tr>
                    @else
                    @foreach ($data as $d)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $d->mahasiswa->nama }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $d->nim }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $d->statusPembimbing }}
                            </td>
                            <td class="py-4 px-6">
                                 @php
                                    $jumlahMahasiswa = \App\Models\riwayat_bimbingan::where('nim', $d->nim)->count();
                                @endphp
                                {{ $jumlahMahasiswa }}
                            </td>
                            <td class="py-4 px-6 text-right">
                                <a href="{{ route('lihatMahasiswaBimbingan', ['nim' => $d->nim]) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline hover:text-blue-800 dark:hover:text-blue-400">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        </div>

                
                <div class="justify-center mt-3">
                    {{-- {{ $data->links() }} --}}
                </div>



            </div>


        </div>



    </div>


@endSection
