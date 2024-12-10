<!-- resources/views/admin/testimonials/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Testimoni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>Edit Testimoni</h1>

        <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $testimonial->name }}" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Lokasi</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $testimonial->location }}" required>
            </div>

            <div class="mb-3">
                <label for="testimonial" class="form-label">Testimoni</label>
                <textarea class="form-control" id="testimonial" name="testimonial" rows="4" required>{{ $testimonial->testimonial }}</textarea>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Foto</label>
                <input type="file" class="form-control" id="photo" name="photo">
                @if($testimonial->photo)
                    <div class="mt-2">
                        <img src="{{ asset('storage/'.$testimonial->photo) }}" width="100" alt="Foto">
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-warning">Perbarui Testimoni</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
