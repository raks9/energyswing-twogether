<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Alat</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Apply Poppins font */
        body {
            font-family: 'Poppins',;
            background: linear-gradient(280deg, #529277, #ffffff);            
            color: #333333; /* Dark grey text color */
            ;
        }

        h1 {
            font-weight: 600; /* Bold title */
            padding-bottom: 50px; /* Add space below the title */
            padding-top: 130px; /* Add space below the title */
        }

        .form-label {
            font-weight: 600; /* Bold labels */
        }

        .btn {
            font-weight: 600; /* Bold buttons */
        }

        .alert-success {
            background-color: #28a745;
            color: white;
            font-weight: 600;
        }

        .datepicker {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Tombol Kembali ke Beranda -->
                <div class="mb-4 text-start">
                    <a href="/landing" class="btn btn-outline-secondary">Kembali ke Beranda</a>
                </div>

                <h1 class="mb-4 text-center">Penyewaan Alat</h1>

                <!-- Tampilkan notifikasi sukses jika ada -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Form Peminjaman -->
                <form action="{{ route('loans.store') }}" method="POST" class="shadow p-4 rounded bg-light">
                    @csrf

                    <!-- Dropdown untuk memilih alat -->
                    <div class="mb-3">
                        <label for="tool_id" class="form-label">Pilih Alat</label>
                        <select name="tool_id" id="tool_id" class="form-select" required>
                            @foreach ($tools as $tool)
                                <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Input tanggal mulai -->
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Tanggal Mulai Rental</label>
                        <input type="text" id="start_date" name="start_date" class="form-control datepicker" placeholder="Pilih tanggal mulai" required>
                    </div>

                    <!-- Input tanggal selesai -->
                    <div class="mb-3">
                        <label for="end_date" class="form-label">Tanggal Selesai Rental</label>
                        <input type="text" id="end_date" name="end_date" class="form-control datepicker" placeholder="Pilih tanggal selesai" required>
                    </div>

                    <!-- Tombol submit -->
                    <div class="d-flex justify-content-between">
                        <a href="/riwayat" class="btn btn-secondary">Lihat Riwayat</a>
                        <button type="submit" class="btn btn-primary">Ajukan Peminjaman</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- Flatpickr Configuration -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bookedDates = @json($bookedDates); // Data tanggal yang sudah dipesan dari backend
            
            flatpickr(".datepicker", {
                minDate: "today", // Mulai dari hari ini
                dateFormat: "Y-m-d",
                disable: bookedDates, // Tanggal yang tidak bisa dipilih
            });
        });
    </script>
</body>
</html>
