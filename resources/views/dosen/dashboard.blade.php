@extends('/layouts/dosen/main')
@section('title', 'Dashboard')

@section('content')

    <div class="w-full max-sm:w-screen p-4 max-sm: text-left bg-white  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-900 dark:text-white">
            Data Pengguna
        </h5>
        <hr class=" mb-3 py-0.5 bg-info-500 ">

        <div class="flex flex-row max-sm:flex-col">
            {{-- mahasiswa sedang --}}
            <div class="">
                <a href="/dosen/bimbingan"
                    class="block md: max-w-sm p-6  bg-info-500 border border-gray-200 rounded-lg shadow-md hover:bg-info-600 ">
                    <h5 class="mb-2 text-left text-5xl font-bold tracking-tight text-gray-100 dark:text-white">
                        {{$mhsBimbingan}}</h5>
                    <p class="font-normal text-gray-100 dark:text-gray-400">
                        Mahasiswa Sedang Bimbingan
                    </p>
                </a>
            </div>

            {{-- selsai bimbingan --}}
            <div class="md:ml-4">
                <a href="/dosen/bimbingan/selesai"
                    class="block max-w-sm p-6 bg-danger-500 border border-gray-200 rounded-lg shadow-md hover:bg-danger-600 ">
                    <h5 class="mb-2 text-left text-5xl font-bold tracking-tight text-gray-100 dark:text-white">
                        {{$mhsSelesai}}</h5>
                    <p class="font-normal text-gray-100 dark:text-gray-400">
                        Mahasiswa Selesai Bimbingan
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full max-sm:w-screen p-1 max-sm: text-left bg-white  sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-900 dark:text-white">
            Permintaan Konfirmasi Riwayat Bimbingan
        </h5>
        <hr class=" mb-3 py-0.5 bg-info-500 ">
        <div class="overflow-y-auto max-h-40 ">
            <div class="block my-1 md:W-full  bg-info-100 border-1 rounded-lg shadow-md ">
                @if ($data->count() > 0)
                    @foreach ($data as $d)
                        <div class="flex flex-row">
                            <div class="basis-auto p-2">
                                <p class="p-auto font-normal text-gray-900 dark:text-gray-400">

                                    {{ $d->tanggal }}
                                </p>
                            </div>
                            <div class="basis-1/5">
                                <p class=" p-2 ml-2 font-normal text-gray-900 dark:text-gray-400">
                                    {{ $d->mahasiswa->nama }}
                                </p>
                            </div>
                            <div class="basis-3/5">
                                <p class="p-2 font-normal text-gray-900 dark:text-gray-400">
                                    Meminta konfirmasi catatan bimbingan
                                </p>
                            </div>
                            <div class="basis-auto">
                                <button class="p-2 font-normal text-info-500 hover:text-info-600 dark:text-gray-400"
                                    type="button" data-modal-toggle="staticModal">
                                    <div class="flex ">
                                        Lihat
                                        <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>
                                <!-- Main modal -->
                                <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full h-full max-w-2xl md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                    Permintaan Konfirmasi Catatan Bimbingan
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
                                                    Tanggal
                                                </p>
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    {{ $d->tanggal }}
                                                </p>

                                                <p class="font-bold">
                                                    Nama
                                                </p>
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    {{ $d->mahasiswa->nama }}
                                                </p>

                                                <p class="font-bold">
                                                    Catatan Bimbingan
                                                </p>
                                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                    {{ $d->catatan }}

                                                </p>

                                            </div>
                                            <!-- Modal footer -->
                                            <div
                                                class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                <form action="/konfirmasi" method="post">
                                                    @csrf
                                                    <input type="hidden" name="mahasiswa" value="{{ $d->nim }}">
                                                    <input type="hidden" name="tanggal" value="{{ $d->tanggal }}">
                                                    <button type="submit"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Konfirmasi</button>
                                                </form>

                                                <button data-modal-toggle="staticModal" type="button"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="block md: W-full p-4  bg-white border border-gray-200 rounded-lg shadow-md ">
                        <p class="font-normal text-gray-900 dark:text-gray-400">
                            Tidak Ada Permintaan Konfirmasi
                        </p>
                    </div>

                @endif

            </div>

        </div>

    </div>


    </div>

@endSection
