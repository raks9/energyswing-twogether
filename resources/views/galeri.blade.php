<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Font Poppins */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(280deg, #529277, #ffffff);
            color: white;
            margin: 0;
            padding: 0;
        }

        .gallery-title {
            font-size: 2.5rem;
            font-weight: 600;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .gallery-container {
            padding: 20px;
        }

        .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .gallery-item:hover {
            transform: scale(1.05); /* Efek hover */
        }

        .back-button-container {
            text-align: center;
            margin-top: 30px;
        }

        .back-button {
            background-color: #ffffff;
            color: #529277;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .back-button:hover {
            background-color: #529277;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Judul Galeri -->
    <div class="gallery-title">Galeri</div>

    <!-- Galeri Foto -->
    <div class="container gallery-container">
        <div class="row g-4">
            <!-- Foto 1 -->
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('images/bandul.jpg') }}" alt="Energy Swing Image" class="img-fluid rounded">
                </div>
            </div>

            <!-- Foto 2 -->
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('images/bandul.jpg') }}" alt="Energy Swing Image" class="img-fluid rounded">
                </div>
            </div>

            <!-- Foto 3 -->
            <div class="col-md-4">
                <div class="gallery-item">
                    <img src="{{ asset('images/bandul.jpg') }}" alt="Energy Swing Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol Kembali ke Beranda -->
    <div class="back-button-container">
        <a href="{{ url('/landing') }}" class="back-button">Kembali ke Beranda</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
