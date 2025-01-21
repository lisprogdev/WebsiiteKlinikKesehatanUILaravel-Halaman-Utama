<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Sriracha&family=Yanone+Kaffeesatz:wght@200..700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('Asset/Image/Element/Logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Asset/Css/Partials/Navigasi.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/Partials/Footers.css') }}">
    <link rel="stylesheet" href="{{ asset('Asset/Css/Pasien/Welcome.css') }}">
    <title>Halo, Selamat Datang Di Klinik Dokter Azwar</title>
</head>

<body>
    @include('Partials.Pasien.Navigasi')
    <div class="header">
        <div class="header__container">
            <div class="header__content">
                <h1 class="header__title">Selamat Datang di Klinik Dokter Azwar</h1>
                <p class="header__subtitle">Tempat Tebaik Untuk Kesehatan Urulogi Anda</p>

                <div class="header__datetime">
                    <div class="header__date">
                        <i class="fas fa-calendar-alt"></i>
                        <span id="date">Senin, 22 Januari 2025</span>
                    </div>
                    <div class="header__divider"></div>
                    <div class="header__time">
                        <i class="fas fa-clock"></i>
                        <span id="time">14:30 WITA</span>
                    </div>
                </div>

                <div class="header__action">
                    <button class="header__button">
                        <span class="header__button-icon">
                            <i class="fas fa-ticket-alt"></i>
                        </span>
                        <span class="header__button-text">Ambil Antirian</span>
                        <span class="header__button-effect"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>


    @include('Partials.Pasien.Footers')


    <script src="{{ asset('Asset/Js/Pasien/Welcome.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
