<h1>Daftar FAQ</h1>
<a href="{{ route('faqs.create') }}">Tambah FAQ</a>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Pertanyaan</th>
            <th>Jawaban</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($faqs as $faq)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $faq->question }}</td>
            <td>{{ $faq->answer }}</td>
            <td>
                <a href="{{ route('faqs.edit', $faq->id) }}">Edit</a>
                <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
