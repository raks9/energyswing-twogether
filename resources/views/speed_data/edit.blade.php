<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kecepatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Data Kecepatan</h1>
        <form action="{{ route('speed_data.update', $speedData->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="month">Bulan</label>
                <input type="text" name="month" id="month" class="form-control" value="{{ $speedData->month ?? '' }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="speed">Kecepatan (m/s)</label>
                <input type="number" step="0.01" name="speed" id="speed" class="form-control" value="{{ $speedData->speed ?? '' }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
