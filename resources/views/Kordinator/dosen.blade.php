@extends('layouts.kordinator.main')

@section('title', 'Dosen Pembimbing TA')

@section('user', 'Dosen Pembimbing TA')

@section('content')
    {{-- CONTEN 1 --}}
    <div
        class="w-full max-sm:w-screen px-4 py-1 max-sm: text-left bg-white border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-900 dark:text-white">
            Dosen Pembimbing
        </h5>
        <hr class=" mb-3 py-0.5 bg-info-500 ">
        <div class="flex flex-row">
            <div class="basis-1/3">

                <form class="flex items-center" action="/list/dosen" method="POST" >
                    @csrf
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="simple-search" name="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search" required>
                    </div>
                    <button type="submit"
                        class="p-2  text-sm font-medium text-white bg-blue-700 rounded-r border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>



            </div>
            <div class="basis-full flex place-content-end">


                <!-- Modal toggle -->
                <button
                    class="block text-white bg-success-700 hover:bg-success-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button" data-modal-toggle="authentication-modal">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                        </path>
                    </svg>
                    <span class="ml-2">Share Link Pendaftaran</span>
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
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Pendaftaran Dosen
                                    Pembimbing TA
                                </h3>
                                <div class="space-y-5">
                                    <div>
                                        <label for="link-penaftaran-dosen"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Link Pendaftaran
                                        </label>
                                        <input type="text" name="link-penaftaran-d" id="link-penaftaran-dosen"
                                            value="sibta.test/dosen/daftar"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    </div>

                                    <button id="copy" type="button" onclick="copyToClipboard()"
                                        class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Copy Link
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>



    </div>

    {{-- CONTENT 2 --}}
    <div
        class="w-full h-min-[530px]  max-sm:w-screen p-4 max-sm: text-left bg-white border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">

        <div class="overflow-x-auto mb-28 relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-100 uppercase bg-info-500 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Nama
                        </th>
                        <th scope="col" class="py-3 px-6">
                            NIP
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Jurusan
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Mahasiswa Bimbingan
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only">Lihat</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dosen)
                        <tr
                            class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $dosen->nama }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $dosen->nip }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $dosen->jurusan }}
                            </td>
                            <td class="py-4 px-6">
                                @php
                                    $jumlahMahasiswa = \App\Models\bimbingan::where('pembimbing_id', $dosen->nip)->count();
                                @endphp
                                {{ $jumlahMahasiswa }}
                            </td>
                            <td class="py-4 px-6 text-right">
                                <a href="{{ route('lihatDosen', $dosen->nip) }}"
                                    class="font-medium text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300">Lihat</a>
                            </td>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="pt-4">
            {{ $data->links() }}
        </div>

    </div>
    <script>
        function copyToClipboard() {
            document.getElementById("link-penaftaran-dosen").select();
            document.execCommand('copy');
        }
    </script>



@endSection
