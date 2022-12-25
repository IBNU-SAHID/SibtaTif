@extends('layouts.dosen.main')

@section('title', 'Data Mahasiswa')

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
            Data Mahasiswa
        </h5>
        <hr class=" mb-3 py-0.5 bg-info-500 ">
        <div class="flex flex-row max-sm:flex-col">
            <div class="basis-1/4">

                <p class="font-bold">
                    Nama
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->nama }}
                </p>
                <p class="font-bold">
                    NIM
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->nim }}
                </p>
                <p class="font-bold">
                    Jurusan
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->jurusan }}
                </p>
                <p class="font-bold">
                    Jenis Kelamin
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->jenisKelamin }}
                </p>
                <p class="font-bold">
                    Telepon
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->telepon }}
                </p>
                <p class="font-bold">
                    Email
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    {{ $mahasiswa->email }}
                </p>
                <div>
                    <button class="py-2 font-normal text-info-500 hover:text-info-700 dark:text-gray-400" type="button"
                        data-modal-toggle="staticModal">
                        <div class="flex ">
                            <svg class="w-6 h-6 mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Lihat Info Tugas Akhir

                        </div>
                    </button>
                    <!-- Main modal -->
                    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-2xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Informasi Tugas Akhir
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="staticModal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 ">
                                    <p class="font-bold">
                                        Judul TA
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $mahasiswa->info_ta['judul'] }}
                                    </p>

                                    <p class="font-bold">
                                        Tentang Tugas Akhir
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $mahasiswa->info_ta['deskripsi'] }}
                                    </p>
                                    <p class="font-bold">
                                        Jenis TA
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        {{ $mahasiswa->info_ta['jenis_ta'] }}
                                    </p>
                                    <p class="font-bold">
                                        Dosen Pembimbing 1
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        @if ($pembimbing1 != null)
                                            {{ $pembimbing1[0]['nama'] }}
                                        @else
                                        @endif
                                    </p>
                                    <p class="font-bold">
                                        Dosen Pembimbing 2
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        @if ($pembimbing2 != null)
                                            {{ $pembimbing2[0]['nama'] }}
                                        @else
                                            Belum Ada
                                        @endif
                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>

                </div>


            </div>
            <div>
                <div class="flex flex-wrap justify-between ">
                    <p class="font-bold my-1">
                        Riwayat Bimbingan Tugas Akhir
                    </p>

                    <div class="flex items-center">
                        <a href="{{ route('download', $mahasiswa->nim) }}" target="_blank"
                            class="block text-success-500 hover:text-success-700 bg-white  focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px- py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <div class="flex flex-wrap ">
                                <div>
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z"
                                            clip-rule="evenodd"></path>
                                    </svg>

                                </div>
                                <div>
                                    <span class="ml-1">Unduh Form Bimbingan</span>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="overflow-x-auto relative item-end">
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
                        @if (count($riwayat) != 0)
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
                                                            <svg class="w-6 h-6 text-danger-500" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                                            <svg class="w-6 h-6 text-danger-500" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                        @else
                            <tbody>
                                <tr>
                                    <td class="py-4 px-6 w-auto border-2 border-gray-900" colspan="5">
                                        <div class="flex justify-center">
                                            <div>
                                                <svg class="w-6 h-6 text-danger-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                            <div class="text-[12px]">Belum Ada Riwayat Bimbingan</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        @endif

                    </table>
                </div>
                <div class="justify-center mt-3">
                    {{ $riwayat->links() }}
                </div>



            </div>


        </div>



    </div>


@endSection
