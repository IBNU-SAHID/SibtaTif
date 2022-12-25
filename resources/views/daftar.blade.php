<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Daftar Sebagai ?</title>
</head>
<body class=" max-sm:max-w-full">
    <section >
        <div class="">
            {{-- bagian 1 --}}
            <div class="w-1/2 max-sm:w-screen  mt-4 mx-auto p-4 max-sm: text-center bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 max-sm:text-5xl text-2xl max-sm:text-[18px] font-bold text-gray-900 dark:text-white">Form Pendaftaran</h5>
                <div class="flex flex-row justify-center items-center max-sm:text-xs">
                    {{-- tombol daftar sebagai mahasiswa --}}
                    <div class="basis-1/2">
                        <button id="btn-mhs" type="button" onclick="gantiKeMhs()" class="mt-3 w-full  border border-gray-200 text-white bg-info-500 focus:ring-4 focus:outline-none focus:ring-info-300 font-medium  text-lg max-sm:text-sm px-5 py-2.5 text-center ">Daftar Sebagai <br>Mahasiswa</button>
                    </div>
                    {{-- tombol daftar sebagai dosen pembimbing --}}
                    <div class="basis-1/2">
                        <button id="btn-dosen" type="button" onclick="gantiKeDosen()" class="mt-3 w-full border border-gray-200 text-gray-600 bg-gray-200 hover:bg-info-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-info-300 font-medium text-lg max-sm:text-sm px-5 py-2.5 text-center">Daftar Sebagai <br>Dosen Pembimbing</button>
                    </div>
                    
                </div>
            </div>

            {{-- bagian form mahasiswa --}}
            <div id="r-mahasiswa" class="block w-1/2 max-sm:w-full  mx-auto p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                
                <div class="">                 
                    <form action="/daftar" method="POST">
                        @csrf
                        {{-- data mahasiswa --}}
                        <div id="data-mahasiswa">
                            <label for="m-nama" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Data Mahasiswa</label>
                            <hr class=" mb-3 py-0.5 bg-info-500 ">
                            
                            {{-- nama --}}
                            <div class="mb-6">
                                <label for="m-nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                <input type="text" id="m-nama" name="Nama Mahasiswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Lengkap Anda" >
                            </div>
                            {{-- nim --}}
                            <div class="mb-6">
                                <label for="m-nim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                                <input type="text" id="m-nim" name="NIM" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIM Anda" >
                            </div>
                            {{-- jk --}}
                            <div>
                                <label for="m-jk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                <div class="flex">
                                    <div class="flex items-center mb-4">
                                        <input id="m-laki-laki" type="radio" value="laki-laki" name="jenis kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="m-laki-laki" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                                    </div>
                                    <div class="flex items-center mb-4 ml-4">
                                        <input id="m-perempuan" type="radio" value="perempuan" name="jenis kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="m-perempuan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            {{-- jurusan (disable input) --}}
                            <div class="mb-6">
                                <label for="m-jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                                <input type="text" id="m-jurusan" name="jurusan"  class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Teknik Informatika">
                            </div>  
                            {{-- nomor telepon --}}
                            <div class="mb-6">
                                <label for="m-telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                                <input type="tel" id="m-telepon" name="telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor Telepon (+62 812-3456-7891)" >
                            </div>
                            {{-- Email --}}
                            <div class="mb-6">
                                <label for="m-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                                <input type="email" id="m-email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email (sibta@students.com)" >
                            </div> 
                        </div>
                        {{-- Informasi TA --}}
                        <div id="informasi-ta">
                            <label for="judul" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Informasi Tugas Akhir</label>
                            <hr class=" mb-3 py-0.5 bg-info-500 ">
                            {{-- judul TA--}}
                            <div class="mb-6">
                                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Tugas Akhir</label>
                                <input type="text" id="judul" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Tugas Akhir Anda" >
                            </div>

                            {{-- Deskripsi TA --}}
                            <div class="mb-6">
                                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsikan tentang tugas akhir mu disini..."></textarea>
                            </div>
                            {{-- Jenis TA --}}
                            <div class="mb-6">
                                <label for="jta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Tugas Akhir</label>
                                <div class="flex">
                                    <div class="flex items-center mb-4">
                                        <input id="laporan-base" type="radio" value="laporan base" name="jenis-ta" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="laporan-base" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laporan Base</label>
                                    </div>
                                    <div class="flex items-center mb-4 ml-4">
                                        <input id="paper-base" type="radio" value="paper-base" name="jenis-ta" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="paper-base" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Paper Base</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- data akun mahasiswa--}}
                        <div id="data-akun-mahasiswa">
                            <label for="m-username" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Data Akun</label>
                            <hr class=" mb-3 py-0.5 bg-info-500 ">
                            {{-- username--}}
                            <div class="mb-6">
                                <label for="m-username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" id="m-username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username Anda" >
                            </div>
                            {{-- password --}}
                            <div class="mb-6">
                                <label for="m-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" id="m-password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" >
                            </div> 
                            {{-- konfirmasi password --}}
                            <div class="mb-6">
                                <label for="m-confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi password</label>
                                <input type="password" id="m-confirm_password" name="konfirmasiPassword" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" >
                            </div> 
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Mendaftar
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- bagian daftar dosen --}}
            <div id="r-dosen" class="hidden w-1/2 max-sm:w-full  mx-auto p-4 bg-white border rounded-lg shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                
                <div class="daftar-sebagai-mahasiswa">                 
                    <form>
                        @csrf
                        {{-- data dosen--}}
                        <div id="data-dosen">
                            <label for="d-nama" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Data Dosen</label>
                            <hr class=" mb-3 py-0.5 bg-info-500 ">
                            {{-- nama --}}
                            <div class="mb-6">
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Lengkap Anda" >
                            </div>
                            
                            {{-- nip
                            <div class="mb-6">
                                <label for="d-nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                                <input type="text" id="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIP Anda" >
                            </div> --}}

                            {{-- jk --}}
                            <div>
                                <label for="d-jk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                <div class="flex">
                                    <div class="flex items-center mb-4">
                                        <input id="d-laki-laki" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="d-laki-laki" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                                    </div>
                                    <div class="flex items-center mb-4 ml-4">
                                        <input id="d-perempuan" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="d-perempuan" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            {{-- jurusan (disable input) --}}
                            <div class="mb-6">
                                <label for="d-jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                                <input type="text" id="d-jurusan" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jurusan (Teknik Informatika)">
                            </div>  
                            {{-- nomor telepon --}}
                            <div class="mb-6">
                                <label for="d-telepon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                                <input type="tel" id="d-telepon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor Telepon (+62 812-3456-7891)" >
                            </div>
                            {{-- Email --}}
                            <div class="mb-6">
                                <label for="d-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                                <input type="email" id="d-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email (sibta@students.com)" >
                            </div> 

                        </div>

                        <div id="data-akun-dosen">
                            <label for="m-username" class="block mb-2 text-lg font-bold  text-info-500 dark:text-white">Data Akun</label>
                            <hr class=" mb-3 py-0.5 bg-info-500 ">
                            {{-- username--}}
                            <div class="mb-6">
                                <label for="d-username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" id="d-username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username Anda" >
                            </div>
                            {{-- password --}}
                            <div class="mb-6">
                                <label for="d-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" id="d-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" >
                            </div> 
                            {{-- konfirmasi password --}}
                            <div class="mb-6">
                                <label for="d-confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi password</label>
                                <input type="password" id="d-confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" >
                            </div> 

                        </div>

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Mendaftar
                        </button>
                    </form>

                </div>
            </div>
            
        </div>
    </section>
    <script src="/js/formDaftar.js"></script>
</body>
</html>