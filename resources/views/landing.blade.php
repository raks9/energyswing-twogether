<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Swing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(280deg, #529277, #ffffff);
            font-family: 'Poppins', sans-serif;
            color: #333;
            min-height: 100vh;
            padding-top: 30px;
        }
        .navbar {
            padding: 20px 5rem;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            padding-left: 20px;
        }
        .navbar-nav .nav-link {
            color: #333;
            font-weight: normal;
            margin-right: 1rem;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5rem 1rem;
            padding-bottom: 20rem;
        }
        .hero-content {
            margin-left: -4rem;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #000;
            margin-bottom: 2rem;
        }
        .intro-text {
            color: #106D68;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .subtext {
            color: #666;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .hero .btn-primary {
            background-color: #106D68;
            border: none;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s; /* Animasi */
        }

        .hero .btn-primary:hover {
            background-color: #C0C0C0; /* Warna saat di-hover */
            transform: translateY(-2px); /* Efek naik saat hover */
        }

        .hero .btn-primary:active {
            background-color: #1e7e34; /* Warna saat tombol diklik */
            transform: translateY(1px); /* Efek turun saat klik */
        }
        .hero-image img {
            max-width: 120%;
            height: auto;
            margin-left: 3rem;
        }
        .product-definition {
            background: #ffffff;
            padding: 3rem 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 3rem auto;
        }
        .product-definition h3 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 0.5rem;
        }
        .product-definition h2 {
            font-size: 2rem;
            color: #106D68;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }
        .product-definition p {
            color: #555;
            line-height: 1.6;
        }
        
        .btn-custom {
            background-color: #106D68; /* Warna latar belakang */
            color: #fff; /* Warna teks */
            border: none; /* Hilangkan border */
            padding: 0.75rem 2rem; /* Sesuaikan padding */
            border-radius: 5px; /* Tambahkan efek melengkung */
            font-size: 1rem; /* Ukuran font */
            transition: background-color 0.3s, transform 0.3s; /* Animasi */
        }

        .btn-custom:hover {
            background-color: #C0C0C0; /* Warna saat di-hover */
            transform: translateY(-2px); /* Efek naik saat hover */
        }

        .btn-custom:active {
            background-color: #1e7e34; /* Warna saat tombol diklik */
            transform: translateY(1px); /* Efek turun saat klik */
        }

        .testimoni-section h2 {
            font-weight: bold;
            text-align: center;
            margin-top: 20rem; /* Atur jarak atas */
            margin-bottom: 7rem; /* Atur jarak atas */
        }

        .testimoni-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Shadow untuk efek 3D */
            background-color: rgba(255, 255, 255, 0.1); /* Warna putih dengan transparansi */
            max-width: 250px;
            height: 350px;
            margin: 3rem;
            transition: transform 0.3s, box-shadow 0.3s; /* Animasi saat hover */
            margin-bottom: 20rem;
        }

        .testimoni-card:hover {
            transform: translateY(-10px); /* Kartu akan terangkat saat di-hover */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5); /* Efek shadow lebih besar saat di-hover */
        }

        .testimoni-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        .testimoni-card h5 {
            font-size: 1rem;
            font-weight: bold;
            color: #106D68;
        }
        .testimoni-card p {
            font-size: 0.9rem;
            color: #333;
            text-align: center;
            padding-top: 20px;
        }
        .carousel-control-prev,
        .carousel-control-next {
            position: absolute;
            top: 35%; /* Tempatkan di tengah vertikal */
            transform: translateY(-50%); /* Pusatkan secara vertikal */
            width: 50px; /* Sesuaikan lebar tombol */
            height: 50px; /* Sesuaikan tinggi tombol */
            background-color: rgba(0, 0, 0, 0.0); /* Tambahkan latar belakang semi-transparan untuk visibilitas */
            border-radius: 50%; /* Buat tombol berbentuk bulat */
        }

        .carousel-control-prev {
            left: -10px; /* Geser tombol prev ke kiri carousel */
        }

        .carousel-control-next {
            right: -10px; /* Geser tombol next ke kanan carousel */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 100%, 100%; /* Sesuaikan ukuran ikon di dalam tombol */
        }
        html {
        scroll-behavior: smooth;
        }

        .faq-section {
        background: rgba(255, 255, 255, 0.0); /* Warna putih dengan transparansi 80% */
        padding: 2rem;
        border-radius: 8px;
        }

        .faq-section p {
            font-size: 1.3rem;
            color: #000000;
            font-weight: regular;
        }

        .faq-section h2 {
            font-size: 2rem;
            color: #106D68;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .accordion {
            margin-top: 5rem; /* Tambahkan jarak atas dari judul ke box FAQ */
            margin-bottom: 7rem;
        }

        .accordion-button {
            font-size: 1rem;
            font-weight: bold;
            color: #106D68;
            background-color: #f8f9fa;
        }
        .accordion-button:not(.collapsed) {
            background-color: #e9ecef;
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
        }

        .avatar {
            width: 100px; /* Ganti ukuran sesuai keinginan */
            height: 100px; /* Ganti ukuran sesuai keinginan */
            border: 2px solid #fff; /* Opsional, menambahkan border putih */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Opsional, menambahkan bayangan */
        }

        .avatar-container {
    margin-top: -10px; /* Geser ke atas, ubah nilai sesuai kebutuhan */
    display: inline-block;
}
    </style>
</head>
<body>
<!-- Dropdown User di Pojok Kanan Atas -->
<nav>
    <li class="nav-item dropdown" style="position: absolute; top: 55px; right: 160px; list-style: none; z-index: 1000;">
        @auth
            <!-- Jika Pengguna Sudah Login -->
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}" alt="User Avatar" class="rounded-circle" width="50" height="50">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#">{{ auth()->user()->name }}</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Sign out</button>
                    </form>
                </li>
            </ul>
        @else
            <!-- Jika Pengguna Belum Login -->
            <a class="nav-link" href="{{ route('login') }}">Login</a>
        @endauth
    </li>
</nav>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Energy Swing</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="/pinjam">Penyewaan</a></li>
                <li class="nav-item"><a class="nav-link" href="/monitoring">Pemantauan</a></li>
                <nav class="navbar">
    <ul class="navbar-nav">



            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero container">
        <div class="hero-content">
            <p class="intro-text">Hallo, Selamat Datang</p>
            <h1>Telah Tiba Saat Yang Ditunggu Sumber Energi Abadi</h1>
            <p class="subtext">Sumber energi tenaga bandul<br>Menghasilkan listrik secara abadi</p>
            <a href="#product-description" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </div>
        <div class="hero-image">
            <img src="{{ asset('images/batrey.png') }}" alt="Battery Image">
        </div>
    </section>

    <!-- Product Definition Section -->
    <section id="product-description" class="product-definition container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3>Energy Swing</h3>
                <h2>Apa itu Energy Swing?</h2>
                <p>Energy Swing merupakan inovasi yang menarik dalam upaya mencari sumber energi alternatif yang ramah lingkungan. Energi bandul, yang bekerja berdasarkan prinsip konversi energi kinetik menjadi energi listrik, dianggap sebagai salah satu solusi potensial untuk masalah ketergantungan pada sumber energi fosil.</p>
                <p>Sistem yang dibuat untuk memberikan solusi atas permasalahan kurangnya pemahaman masyarakat umum mengenai sumber energi abadi serta kesulitan dalam akses dan pemesanan alat generator listrik berbasis bandul.</p>
                <p>Dengan demikian, sistem ini dapat membantu dalam proses pengendalian alat generator listrik tenaga bandul, memudahkan pemesanan di area Jabodetabek, dan memberikan edukasi tentang penggunaan fitur monitoring untuk memantau performa alat secara langsung.</p>
                <!-- Tombol Booking -->
                <a href="/pinjam" class="btn btn-custom mt-3">Pinjam Sekarang!</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/alat.png') }}" alt="Energy Swing Image" class="img-fluid rounded">
            </div>
        </div>
    </section>


    <!-- Testimoni Section -->
    <section class="testimoni-section container my-5">
        <h2>Tanggapan Dari Mereka</h2>
        <div id="testimoniCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="testimoni-card">
                            <img src="images/rakha.jpg" alt="User 1">
                            <p>“Sangat bermanfaat untuk memahami energi alternatif.”</p>
                            <h5>Rakha Athallah</h5>
                            <small>Jakarta</small>
                        </div>
                        <div class="testimoni-card">
                            <img src="images/mursid.jpg" alt="User 2">
                            <p>“Solusi inovatif yang sangat membantu masyarakat sekitar.”</p>
                            <h5>Muhammad Nur Rasyiid</h5>
                            <small>Depok</small>
                        </div>
                        <div class="testimoni-card">
                            <img src="images/oca.jpg" alt="User 3">
                            <p>“Meningkatkan pengetahuan saya tentang energi baru.”</p>
                            <h5>Liora Taya</h5>
                            <small>Bandung</small>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="testimoni-card">
                            <img src="images/setyo.jpg" alt="User 4">
                            <p>“Inovasi yang sangat berguna bagi masyarakat luas.”</p>
                            <h5>Setyo Tamtomo</h5>
                            <small>Surabaya</small>
                        </div>
                        <div class="testimoni-card">
                            <img src="images/jaki.jpg" alt="User 5">
                            <p>“Menambah wawasan mengenai energi ramah lingkungan.”</p>
                            <h5>Zaky Rachmansyah</h5>
                            <small>Yogyakarta</small>
                        </div>
                        <div class="testimoni-card">
                            <img src="images/jeki.jpg" alt="User 6">
                            <p>“Sistem yang mudah digunakan dan sangat bermanfaat.”</p>
                            <h5>Jacky Steven</h5>
                            <small>Malang</small>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>




<!-- FAQ Section -->
<section class="faq-section container my-5">
    <p class="text-center mb-4">FAQ</p>
    <h2 class="text-center mb-4">Pertanyaan yang Sering Diajukan</h2>
    <div class="accordion" id="faqAccordion">
        @foreach ($faqs as $faq)
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading{{ $faq->id }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $faq->id }}" aria-expanded="false" aria-controls="faqCollapse{{ $faq->id }}">
                    {{ $faq->question }}
                </button>
            </h2>
            <div id="faqCollapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="faqHeading{{ $faq->id }}" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    {{ $faq->answer }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.querySelector('.btn-primary').addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector('#product-description');
        const offset = 130; // Sesuaikan offset agar sesuai kebutuhan Anda
        const elementPosition = target.getBoundingClientRect().top + window.pageYOffset;
        
        window.scrollTo({
            top: elementPosition - offset,
            behavior: 'smooth'
        });
    });
    </script>
</body>
</html>
