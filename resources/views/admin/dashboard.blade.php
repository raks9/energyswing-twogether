<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twogether</title>
    <!-- Tambahkan font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<div class="footer-text" style="position: absolute; bottom: 20px; width: 100%; text-align: center; font-size: 14px; color: #555;">
    © 2024 Energy Swing. All rights reserved.<br>Developed by Twogether!
</div>

<body style="margin: 0; padding: 0; height: 100vh; background: linear-gradient(280deg, #529277, #ffffff); font-family: 'Poppins', sans-serif; position: relative;">

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

    <!-- Teks Twogether -->
    <h1 style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); font-size: 3rem; font-weight: 800; color: #2D3748; margin: 0;">
        Twogether's Admin Dashboard
    </h1>

<!-- Tombol pinjam -->
<button style="position: absolute; top: 50%; left: 40%; transform: translate(-50%, -50%); width: 200px; padding: 10px 20px; font-size: 1.2rem; font-weight: 600; color: #ffffff; background-color: #529277; border: none; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;"
        onclick="window.location.href='/admin/peminjaman';"
        onmouseover="this.style.backgroundColor='#417862'"
        onmouseout="this.style.backgroundColor='#529277'">
    Penyewaan
</button>

<!-- Tombol Cek faq -->
<button style="position: absolute; top: 50%; left: 60%; transform: translate(-50%, -50%); width: 200px; padding: 10px 20px; font-size: 1.2rem; font-weight: 600; color: #ffffff; background-color: #529277; border: none; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;"
        onclick="window.location.href='/admin/faqs';"
        onmouseover="this.style.backgroundColor='#417862'"
        onmouseout="this.style.backgroundColor='#529277'">
    FAQ
</button>

<!-- Tombol Pemantauan -->
<button style="position: absolute; top: 60%; left: 40%; transform: translate(-50%, -50%); width: 200px; padding: 10px 20px; font-size: 1.2rem; font-weight: 600; color: #ffffff; background-color: #529277; border: none; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;"
        onclick="window.location.href='/power_data';"
        onmouseover="this.style.backgroundColor='#417862'"
        onmouseout="this.style.backgroundColor='#529277'">
    Pemantauan Daya
</button>

<!-- Tombol pemantauan -->
<button style="position: absolute; top: 60%; left: 60%; transform: translate(-50%, -50%); width: 200px; padding: 10px 20px; font-size: 1.2rem; font-weight: 600; color: #ffffff; background-color: #529277; border: none; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;"
        onclick="window.location.href='/speed_data';"
        onmouseover="this.style.backgroundColor='#417862'"
        onmouseout="this.style.backgroundColor='#529277'">
    Pemantauan Kecepatan
</button>

</body>
</html>
