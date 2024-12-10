<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Data Create</title>
</head>
<body>
    <h1>Tambah Data Kecepatan</h1>
    <form action="{{ route('speed_data.store') }}" method="POST">
        @csrf
        <label for="month">Bulan:</label>
        <input type="text" name="month" id="month" required>
        <br>
        <label for="speed">Kecepatan (m/s):</label>
        <input type="number" name="speed" id="speed" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
