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
                    value="{{ $mahasiswa->nama }}" disabled>

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
        <div class="mt-8">
            <p class="text-left mb-2">Menyatakan telah melakukan Bimbingan TA kepada Dosen Pembimbing TA sebagai
                berikut:</p>
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
                </table>
            </div>
            <p class="mt-2 text-left">Demikian pernyataan ini saya sampaikan. Atas perhatiannya saya ucapkan
                terimakasih.</p>
            <div class="flex basis-row mt-2 mb-10">
                <div class="basis-full">
                    <br>

                </div>
                <div class="basis-2/3">
                    <p class="text-left ">{{$mahasiswa->nama}}, <span id="hari"></span> </p>
                </div>
            </div>

            <div class="flex basis-row mt-10 ">
                <div class="basis-full">
                    <br>

                </div>
                <div class="basis-2/3">
                    <br>
                    <br>
                    <p class="text-left ">(............................................................)</p>
                    <p class="text-left ">NIM. {{$mahasiswa->nim}} </p>
                </div>
            </div>
        </div>
    </div>

    <div
        class="w-2/3 max-sm:w-screen mx-auto p-4 max-sm: text-center bg-white border rounded-b-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">

    </div>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>
    <script>
        const date = new Date();
        const dayOfWeek = date.getDay();
        const tanggal = date.getDate();
        const bulan = date.getMonth();
        const tahun = date.getFullYear();

        const dayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
            'Oktober', 'November', 'Desember'
        ];

        const dayName = dayNames[dayOfWeek];
        const monthName = monthNames[bulan];
        const HariTanggalBulanTahun = dayName + ', ' + tanggal + ' ' + monthName + ' ' + tahun;
        document.getElementById('hari').innerHTML = HariTanggalBulanTahun;
    </script>

</body>

</html>
