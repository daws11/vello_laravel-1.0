@extends('layouts.app')

@section('content')
    <h1 class="section-title" style="margin-top: 80px;">Edit Blog: {{ $blog->title }}</h1>

    <form action="{{ route('admin.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" class="form-control" value="{{ $blog->slug }}" required>
    </div>

    <div class="form-group">
        <label for="image">Upload Gambar (Ganti jika perlu)</label>
        <input type="file" name="image" class="form-control">
        <p>Gambar saat ini: <img src="{{ asset('assets/images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" width="150"></p>
    </div>

    <div class="form-group">
        <label for="type">Tipe Konten</label>
        <select name="type" class="form-control" required>
            <option value="blog" {{ $blog->type == 'blog' ? 'selected' : '' }}>Blog</option>
            <option value="portofolio" {{ $blog->type == 'portofolio' ? 'selected' : '' }}>Portofolio</option>
        </select>
    </div>

    <div class="form-group">
        <label for="date">Tanggal Publikasi</label>
        <input type="date" name="date" class="form-control" value="{{ $blog->date }}" required>
    </div>

    <!-- Paragraf Blog yang dapat ditambah secara dinamis -->
    <div id="paragraphs">
        <h3>Paragraf Blog</h3>
        @foreach($blog->content_paragraphs as $paragraph)
            <div class="form-group">
                <textarea name="content_paragraphs[]" class="form-control" rows="3" required>{{ $paragraph }}</textarea>
            </div>
        @endforeach
    </div>

    <!-- Tombol untuk menambah paragraf baru -->
    <button type="button" id="add-paragraph" class="btn btn-secondary">Tambah Paragraf</button>

    <!-- Tombol Submit -->
    <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
</form>

<script>
    document.getElementById('add-paragraph').addEventListener('click', function() {
        const paragraphsDiv = document.getElementById('paragraphs');
        const newParagraph = document.createElement('div');
        newParagraph.classList.add('form-group');
        newParagraph.innerHTML = `
            <textarea name="content_paragraphs[]" class="form-control" rows="3" placeholder="Masukkan paragraf baru..." required></textarea>
        `;
        paragraphsDiv.appendChild(newParagraph);
    });
</script>

