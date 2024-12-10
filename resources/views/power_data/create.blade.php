<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kekuatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data Kekuatan</h1>
        <form action="{{ route('power_data.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="month">Bulan</label>
                <input type="text" name="month" id="month" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="power">Kekuatan (Watt)</label>
                <input type="number" name="power" id="power" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
