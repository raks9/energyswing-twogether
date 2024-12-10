<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kekuatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Kekuatan</h1>
        <a href="{{ route('power_data.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Kekuatan (Watt)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($powerData as $data)
                <tr>
                    <td>{{ $data->month }}</td>
                    <td>{{ $data->power }}</td>
                    <td>
                        <a href="{{ route('power_data.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('power_data.destroy', $data->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
