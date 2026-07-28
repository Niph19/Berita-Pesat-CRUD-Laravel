<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita Pesat – Edit </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
    <section class="min-h-screen flex items-center justify-center bg-white dark:bg-gray-900 px-4 py-4">
        <div class="relative w-full max-w-2xl">
            <div class="relative p-3 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <div
                    class="flex justify-between items-center pb-2 mb-3 rounded-t border-b dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Berita
                    </h3>
                </div>



                <form action="{{ route('berita.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="d-flex gap-4 mb-4">

                        <div>
                            <label for="judulBerita"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul
                                Berita</label>
                            <input type="text" name="judulBerita" value="{{ $data->judulBerita }}"
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
                                <div class="flex flex-col items-center justify-center gap-1 text-gray-400"
                                    id="upload-placeholder" {{ $data->gambarBerita ? 'style=display:none' : '' }}>
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>
                                    <p class="text-sm font-medium">Klik untuk upload gambar</p>
                                    <p class="text-xs">PNG, JPG, JPEG (Maks. 2MB)</p>
                                </div>

                                <p class="text-sm font-medium text-primary-500 dark:text-primary-400 {{ $data->gambarBerita ? '' : 'hidden' }}"
                                    id="file-name">
                                    {{ $data->gambarBerita ? basename($data->gambarBerita) : '' }}
                                </p>

                                <input id="gambarBerita" name="gambarBerita" type="file" accept="image/*" class="hidden"
                                    onchange="
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
                                placeholder="Masukkan Deskripsi Berita">{{ $data->isiBerita }}</textarea>
                        </div>

                        <div>
                            <label for="penulisBerita"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                            <input type="text" name="author"
                                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Masukkan nama Penulis" required="" value="{{ $data->author }}">
                        </div>



                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Tanggal Terbit
                            </label>

                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
                                    </svg>
                                </div>
                                <input datepicker datepicker-orientation="top" name="tanggalTerbit" type="text"
                                    value="{{ $data->tanggalTerbit }}" datepicker-format="yyyy-mm-dd"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full ps-9 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Pilih tanggal terbit">
                            </div>
                        </div>



                    </div>
                    <button type="submit"
                        class="w-full flex items-center justify-center cursor-pointer text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <span class="text-white text-center text-md">Simpan</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>