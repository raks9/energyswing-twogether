<h1>{{ isset($faq) ? 'Edit FAQ' : 'Tambah FAQ' }}</h1>
<form action="{{ isset($faq) ? route('faqs.update', $faq->id) : route('faqs.store') }}" method="POST">
    @csrf
    @if (isset($faq))
        @method('PUT')
    @endif
    <div>
        <label for="question">Pertanyaan:</label>
        <input type="text" name="question" id="question" value="{{ old('question', $faq->question ?? '') }}" required>
    </div>
    <div>
        <label for="answer">Jawaban:</label>
        <textarea name="answer" id="answer" required>{{ old('answer', $faq->answer ?? '') }}</textarea>
    </div>
    <button type="submit">{{ isset($faq) ? 'Update' : 'Simpan' }}</button>
</form>
