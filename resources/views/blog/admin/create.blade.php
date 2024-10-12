@extends('layouts.app')

@section('content')
    <h1 class="section-title" style="margin-top: 80px;">Tambah Blog Baru</h1>

    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="image">Upload Gambar</label>
        <input type="file" name="image" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="type">Tipe Konten</label>
        <select name="type" class="form-control" required>
            <option value="blog">Blog</option>
            <option value="portofolio">Portofolio</option>
        </select>
    </div>

    <div class="form-group">
        <label for="date">Tanggal Publikasi</label>
        <input type="date" name="date" class="form-control" required>
    </div>

    <!-- Paragraf Blog yang dapat ditambah secara dinamis -->
    <div id="paragraphs">
        <h3>Paragraf Blog</h3>
        <div class="form-group">
            <textarea name="content_paragraphs[]" class="form-control" rows="3" placeholder="Masukkan paragraf pertama..." required></textarea>
        </div>
    </div>

    <!-- Tombol untuk menambah paragraf baru -->
    <button type="button" id="add-paragraph" class="btn btn-secondary">Tambah Paragraf</button>

    <!-- Tombol Submit -->
    <button type="submit" class="btn btn-success mt-3">Simpan</button>
</form>

<!-- Script untuk menambah input paragraf secara dinamis -->
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

@endsection
