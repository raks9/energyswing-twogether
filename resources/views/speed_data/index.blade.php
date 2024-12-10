<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kecepatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Kecepatan</h1>
        <a href="{{ route('speed_data.create') }}" class="btn btn-primary">Tambah Data</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Kecepatan (m/s)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($speedData as $data)
                <tr>
                    <td>{{ $data->month }}</td>
                    <td>{{ $data->speed }}</td>
                    <td>
                        <a href="{{ route('speed_data.edit', $data) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('speed_data.destroy', $data) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
