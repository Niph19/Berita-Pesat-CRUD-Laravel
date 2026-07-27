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
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Sumber informasi terpercaya siswa, guru, dan orang tua SMK Informatika Pesat</p>
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
                <a href="{{ route('create') }}"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Tambahkan Berita
                </a>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                @foreach ($dataBerita as $berita)
                <div class="group flex flex-col sm:flex-row rounded-2xl overflow-hidden bg-white dark:bg-gray-800 shadow-md hover:shadow-xl transition-shadow duration-300">
                    <div class="sm:w-64 sm:shrink-0 overflow-hidden">
                        <img class="w-full h-48 sm:h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                            {{-- src="{{ asset('storage/' . $berita->gambarBerita) }}" alt="{{ $berita->judulBerita }}" --}}
                            alt="Foto Berita">
                    </div>
                    <div class="flex flex-col justify-between p-6 gap-4">
                        <h3
                            class="text-xl font-bold text-gray-900 dark:text-white leading-snug hover:text-blue-600 dark:hover:text-blue-400 transition-colors cursor-pointer">
                            {{ $berita->judulBerita }}
                        </h3>
                        <p class="text-base mt-3 mb-2 font-light text-gray-500 dark:text-gray-400">{{ $berita->isiBerita }}</p>
                        <div class="flex items-center gap-3 pt-2 border-t border-gray-100 dark:border-gray-700">
                            <div>
                                <p class="text-xs font-semibold text-gray-700 dark:text-gray-300">Penulis: {{ $berita->author }}</p>
                                <p class="text-xs text-gray-400 dark:text-gray-500">{{ $berita->tanggalTerbit }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>