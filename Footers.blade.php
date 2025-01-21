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
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Sriracha&family=Yanone+Kaffeesatz:wght@200..700&display=swap"
        rel="stylesheet">
</head>
<footer class="bg-dark text-white py-5">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row gy-4">
            <!-- Brand/Logo Section -->
            <div class="col-lg-3 col-md-6">
                <div class="mb-4">
                    <img src="{{ asset('Asset/Image/Element/Logo.png') }}" alt="Logo Klinik" class="img-fluid" style="max-height: 60px;">
                </div>
                <p class="small">Kami berkomitmen untuk memberikan layanan terbaik kepada pelanggan kami dengan standar
                    kualitas tertinggi.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">Aksi Cepat</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="text-white text-decoration-none hover-opacity">
                            <i class="fas fa-chevron-right"></i> FAQ
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white text-decoration-none hover-opacity">
                            <i class="fas fa-chevron-right"></i> Hubungi Kami
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-white text-decoration-none hover-opacity">
                            <i class="fas fa-chevron-right"></i> Tentang Kami
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">Kontak</h5>
                <div class="mb-3">
                    <i class="fas fa-envelope me-2"></i>
                    <a href="mailto:email@example.com" class="text-white text-decoration-none hover-opacity">
                        email@example.com
                    </a>
                </div>
                <div class="mb-3">
                    <i class="fas fa-phone me-2"></i>
                    <a href="tel:+621234567890" class="text-white text-decoration-none hover-opacity">
                        +62 123 456 7890
                    </a>
                </div>
                <div class="mb-3">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    <span>Jl. Contoh No. 123, Jakarta</span>
                </div>
            </div>

            <!-- Social Media -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold mb-3">Sosial Media</h5>
                <div class="d-flex flex-column gap-2">
                    <a href="https://facebook.com" class="text-white text-decoration-none hover-opacity">
                        <i class="fab fa-facebook me-2"></i>Facebook
                    </a>
                    <a href="https://instagram.com" class="text-white text-decoration-none hover-opacity">
                        <i class="fab fa-instagram me-2"></i>Instagram
                    </a>
                    <a href="https://twitter.com" class="text-white text-decoration-none hover-opacity">
                        <i class="fab fa-twitter me-2"></i>Twitter
                    </a>
                </div>
            </div>
        </div>

        <!-- Map and Contact Form -->
        <div class="row gy-4 mt-4">
            <!-- Map Section -->
            <div class="col-lg-6">
                <h5 class="fw-bold mb-3">Lokasi Kami</h5>
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.2373242262765!2d144.96328!3d-37.813269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d563f10ed79%3A0x5045675218cfc60!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1607585391946!5m2!1sen!2sau"
                        allowfullscreen="" loading="lazy" class="border-0 rounded"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-6">
                <h5 class="fw-bold mb-3">Ajukan Pertanyaan</h5>
                <form action="submit_question.php" method="POST" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control bg-dark text-white border-secondary" id="name"
                            name="name" required>
                        <div class="invalid-feedback">Mohon isi nama Anda</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control bg-dark text-white border-secondary" id="email"
                            name="email" required>
                        <div class="invalid-feedback">Mohon isi email yang valid</div>
                    </div>
                    <div class="mb-3">
                        <label for="question" class="form-label">Pertanyaan</label>
                        <textarea class="form-control bg-dark text-white border-secondary" id="question" name="question" rows="4"
                            required></textarea>
                        <div class="invalid-feedback">Mohon isi pertanyaan Anda</div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane me-1"></i>Kirim
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-5">
            <div class="col-12">
                <hr class="border-secondary">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
                    <p class="mb-3 mb-md-0">&copy; 2025 Nama Perusahaan. Semua hak cipta dilindungi.</p>
                    <div>
                        <a href="privacy-policy.html"
                            class="text-white text-decoration-none hover-opacity me-3">Kebijakan Privasi</a>
                        <a href="terms.html" class="text-white text-decoration-none hover-opacity">Syarat &
                            Ketentuan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>