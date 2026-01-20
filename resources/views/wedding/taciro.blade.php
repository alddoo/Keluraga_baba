<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baba</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <!-- HEADER -->
    <header class="nav">
        <div class="nav-left">
            <img src="{{ asset('img/logo/logo_kagoem.png') }}" class="logo-kagoem" alt="Kaia Logo">
            <img src="{{ asset('img/logo/Logo_baba[1].PNG') }}" class="logo-baba" alt="Baba Logo">
            <img src="{{ asset('img/logo/logo_Kaia.png') }}" class="logo-kaia" alt="Kaia Logo">
        </div>
    </header>

     <section class="wedding-section">

    <div class="gallery-grid">

        <a href="{{ url('/gallery/eca-and-bobbi') }}" class="card">
            <img src="{{ asset('img/foto_eca/6.png') }}" alt="">
            <p>Eca & Bobbi</p>
        </a>

        <a href="{{ url('/gallery/ajeng-and-aidil') }}" class="card">
            <img src="{{ asset('img/foto_ajeng/26.jpg') }}" alt="">
            <p>Ajeng & Aidil</p>
        </a>

        <a href="{{ url('/gallery/alinda-and-ahmad') }}" class="card">
            <img src="{{ asset('img/foto_alinda/14.jpg') }}" alt="">
            <p>Alinda & Ahmad</p>
        </a>

       
        </div>
</body>
</html>
