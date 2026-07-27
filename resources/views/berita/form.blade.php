<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita Pesat – Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
    <h1>Form Berita</h1>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Judul Berita:</label>
        <input type="text" name="judulBerita">
        <label>Gambar Berita:</label>
        <input type="file" name="gambarBerita">
        <label>Isi Berita:</label>
        <textarea name="isiBerita"></textarea>
        <label>Penulis Berita:</label>
        <input type="text" name="author">
        <label>Tanggal Terbit:</label>
        <input type="date" name="tanggalTerbit">
        <button type="submit">Simpan</button>
    </form>

</body>

</html>