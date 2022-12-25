@extends('/layouts/daftar/daftar')
@section('title', 'Mahasiswa')

@section('user', 'Mahasiswa')
@section('content')

    {{-- bagian form mahasiswa --}}
    <div id="r-mahasiswa"
        class="block w-1/2 max-sm:w-full  mx-auto p-4 bg-white border rounded-b-lg  shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">

        <div class="">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <form action="/mahasiswa/daftar" method="post">
                @csrf
                {{-- data mahasiswa --}}
                <div id="data-mahasiswa">
                    <label for="nama" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Data
                        Mahasiswa</label>
                    <hr class=" mb-3 py-0.5 bg-info-500 ">

                    {{-- nama --}}
                    <div class="mb-6">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Lengkap</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Lengkap Anda" required
                            oninvalid="this.setCustomValidity('Silahkan input nama Anda')" oninput="setCustomValidity('')">
                    </div>
                    {{-- nim --}}
                    <div class="mb-6">
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM <span
                                class="text-[10] text-danger-500">->(NIM akan menjadi username anda untuk
                                login)</span></label>
                        <input type="text" id="nim" name="nim" value="{{ old('nim') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="NIM Anda" required oninvalid="this.setCustomValidity('Silahkan input NIM Anda')"
                            oninput="setCustomValidity('')">
                        @error('nim')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">{{$message}}</span> </p>
                        @enderror
                    </div>

                    {{-- jk --}}
                    <div>
                        <label for="jk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Kelamin</label>
                        <div class="flex">
                            <div class="flex items-center mb-4">
                                <input id="m-laki-laki" type="radio" value="laki-laki" name="jenisKelamin"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="m-laki-laki"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                            </div>
                            <div class="flex items-center mb-4 ml-4">
                                <input id="m-perempuan" type="radio" value="perempuan" name="jenisKelamin"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="m-perempuan"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    {{-- jurusan (disable input) --}}
                    <div class="mb-6">
                        <label for="jurusan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan"
                            class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="Teknik Informatika" required
                            oninvalid="this.setCustomValidity('Silahkan input Jurusan Anda')"
                            oninput="setCustomValidity('')">
                    </div>
                    {{-- nomor telepon --}}
                    <div class="mb-6">
                        <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                            Telepon</label>
                        <input type="tel" id="telepon" name="telepon" value="{{ old('telepon') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nomor Telepon (6281234567890)" required
                            oninvalid="this.setCustomValidity('Silahkan input Jurusan Anda')"
                            oninput="setCustomValidity('')">
                    </div>
                    {{-- Email --}}
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Email (sibta@students.com)" required
                            oninvalid="this.setCustomValidity('Format Email yang anda inputkan salah')"
                            oninput="setCustomValidity('')">
                        @error('nim')
                            <p id="outlined_error_help" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                                    class="font-medium">Email yang anda inputkan anda sudah terdaftar!</span> </p>
                        @enderror
                    </div>
                </div>
                {{-- Informasi TA --}}
                <div id="informasi-ta">
                    <label for="judul" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Informasi
                        Tugas Akhir</label>
                    <hr class=" mb-3 py-0.5 bg-info-500 ">
                    {{-- judul TA --}}
                    <div class="mb-6">
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                            Tugas Akhir</label>
                        <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Judul Tugas Akhir Anda" required
                            oninvalid="this.setCustomValidity('Silahkan input judul tugas akhir Anda')"
                            oninput="setCustomValidity('')">
                    </div>

                    {{-- Deskripsi TA --}}
                    <div class="mb-6">
                        <label for="deskripsi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" value="{{ old('deskripsi ') }}"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Deskripsikan tentang tugas akhir mu disini..." required
                            oninvalid="this.setCustomValidity('Berikan deskripsi singkat tentang tugas Akhir Anda')"
                            oninput="setCustomValidity('')"></textarea>
                    </div>
                    {{-- Jenis TA --}}
                    <div class="mb-6">
                        <label for="jta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                            Tugas Akhir</label>
                        <div class="flex">
                            <div class="flex items-center mb-4">
                                <input id="laporan-base" type="radio" value="Laporan base" name="jenis_ta"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="laporan-base"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laporan Base</label>
                            </div>
                            <div class="flex items-center mb-4 ml-4">
                                <input id="paper-base" type="radio" value="Paper base" name="jenis_ta"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="paper-base"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Paper Base</label>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- data akun mahasiswa --}}
                <div id="data-akun-mahasiswa">
                    <label for="m-username" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Password
                        Akun</label>
                    <hr class=" mb-3 py-0.5 bg-info-500 ">
                    {{-- Password --}}
                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="•••••••••" required
                            oninvalid="this.setCustomValidity('kolom ini tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    {{-- konfirmasi password --}}
                    <div class="mb-6">
                        <label for="confirm_password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                            password</label>
                        <input type="password" id="confirm_password" name="konfirmasiPassword"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="•••••••••" required
                            oninvalid="this.setCustomValidity('kolom ini tidak boleh kosong')"
                            oninput="setCustomValidity('')">
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Mendaftar
                    </button>
                </div>
            </form>
        </div>
    </div>

@endSection
