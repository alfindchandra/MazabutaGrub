<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazabuta Grub</title>
    <link rel="shortcut icon" href="/images/logo_footer.jpg" type="image/Mazabuta Grub">
     @vite('resources/css/app.css')
     <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    <x-navbar />
    <x-jumbotron />
    <x-anakperusahaan />
    <x-tentangkami />
    @include('news.index')
    <x-gambar />
    <x-mitra />
    <x-kontak />
    <x-footer />
    

<script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/js/app.js')   
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script> 
</body>
</html>