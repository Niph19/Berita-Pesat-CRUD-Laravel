<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita Pesat – Home </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
    <section class="bg-white dark:bg-gray-900">

        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Kabar Pesat, Informasi Tepat</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Sumber informasi terpercaya siswa, guru, dan orang tua SMK Informatika Pesat</p>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('images/desian-web.png') }}" alt="mockup">
            </div>
        </div>
    </section>


    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-5xl tracking-tight font-extrabold text-gray-900 dark:text-white">Berita Pesat</h2>
                <div class="flex justify-center m-5">
                    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                        class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="button">
                        Create product
                    </button>
                </div>
            </div>

            

            <div id="defaultModal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <div
                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Tambah Berita
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="defaultModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Tutup</span>
                            </button>
                        </div>



                        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="d-flex gap-4 mb-4">

                                <div>
                                    <label for="judulBerita"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                                        Berita</label>
                                    <input type="text" name="judulBerita"
                                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Masukkan Judul Berita" required="">
                                </div>

                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Gambar Berita
                                    </label>

                                    <label for="gambarBerita"
                                        class="mb-2 flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors duration-200">

                                        {{-- Icon --}}
                                        <div class="flex flex-col items-center justify-center gap-1 text-gray-400 dark:text-gray-400"
                                            id="upload-placeholder">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                            </svg>
                                            <p class="text-sm font-medium">Klik untuk upload gambar</p>
                                            <p class="text-xs">PNG, JPG, JPEG (Maks. 2MB)</p>
                                        </div>

                                        {{-- Preview nama file --}}
                                        <p class="hidden text-sm font-medium text-primary-500 dark:text-primary-400"
                                            id="file-name"></p>

                                        <input id="gambarBerita" name="gambarBerita" type="file" accept="image/*"
                                            class="hidden" onchange="
                document.getElementById('file-name').textContent = this.files[0]?.name ?? '';
                document.getElementById('file-name').classList.toggle('hidden', !this.files[0]);
                document.getElementById('upload-placeholder').classList.toggle('hidden', !!this.files[0]);
            ">
                                    </label>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="description"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                                        Berita</label>
                                    <textarea name="isiBerita" rows="4"
                                        class="mb-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Masukkan Deskripsi Berita"></textarea>
                                </div>

                                <div>
                                    <label for="penulisBerita"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                                    <input type="text" name="author"
                                        class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Masukkan nama Penulis" required="">
                                </div>



                                <div>
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Tanggal Terbit
                                    </label>

                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-orientation="top" name="tanggalTerbit" type="text" datepicker-format="yyyy-mm-dd"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full ps-9 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Pilih tanggal terbit">
                                    </div>
                                </div>



                            </div>
                            <button type="submit"
                                class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                Tambahkan Berita
                            </button>
                        </form>
                    </div>
                </div>
            </div>




            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                @foreach ($dataBerita as $berita)
                    <div
                        class="group flex flex-col sm:flex-row rounded-2xl overflow-hidden bg-white dark:bg-gray-800 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="sm:w-64 sm:shrink-0 overflow-hidden">
                            <img class="w-full h-48 sm:h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" {{--
                                src="{{ asset('storage/' . $berita->gambarBerita) }}" alt="{{ $berita->judulBerita }}" --}}
                                alt="Foto Berita">
                        </div>
                        <div class="flex flex-col justify-between p-6 gap-4">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white leading-snug hover:text-blue-600 dark:hover:text-blue-400 transition-colors cursor-pointer">
                                {{ $berita->judulBerita }}
                            </h3>
                            <p class="text-base mt-3 mb-2 font-light text-gray-500 dark:text-gray-400">
                                {{ $berita->isiBerita }}
                            </p>
                            <div class="flex items-center gap-3 pt-2 border-t border-gray-100 dark:border-gray-700">
                                <div>
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-300">Penulis:
                                        {{ $berita->author }}
                                    </p>
                                    <p class="text-xs text-gray-400 dark:text-gray-500">{{ $berita->tanggalTerbit }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            document.getElementById('defaultModalButton').click();
        });
    </script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>