<!-- Meta tags and CSS links -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Sriracha&family=Yanone+Kaffeesatz:wght@200..700&display=swap" rel="stylesheet">
</head>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="{{ asset('Asset/Image/Element/Logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
            <span>Klinik Dokter Azwar</span>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-home"></i>Halaman Utama
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang_klinik.php">
                        <i class="fas fa-info-circle"></i>Tentang Klinik
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="layanan.php">
                        <i class="fas fa-cogs"></i>Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cek_antrian.php">
                        <i class="fas fa-calendar-check"></i>Cek Antrian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cek_dokter.php">
                        <i class="fas fa-user-md"></i>Cek Dokter
                    </a>
                </li>
            </ul>
            
            <!-- Profile Icon -->
            <div class="nav-item">
                <a class="nav-link profile-icon" href="profil.php">
                    <i class="fas fa-user-circle"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>