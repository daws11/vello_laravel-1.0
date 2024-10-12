@extends('layouts.app')

@section('content')
<section class="section blog-detail" id="blog-detail">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding-top: 20px;">
        <h2 class="h2 section-title underline fade-in-bottom">{{ $blog->title }}</h2>

        <!-- Gambar Utama -->
        <figure class="blog-image">
            <img src="{{ asset('assets/images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-responsive">
            <figcaption class="image-caption">{{ $blog->title }}</figcaption>
        </figure>

        <!-- Loop untuk menampilkan semua paragraf -->
        @foreach($blog->content_paragraphs as $paragraph)
            <p class="text">{{ $paragraph }}</p>
        @endforeach

        <!-- Tanggal Publikasi -->
        <div class="publish-date" style="margin-top: 15px;">
            <ion-icon name="time-outline"></ion-icon>
            <time datetime="{{ $blog->date }}">{{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}</time>
        </div>

        <!-- Tombol Melihat Hasil Portofolio (Jika Ada) -->
        @if($blog->portfolio_link)
        <a href="{{ $blog->portfolio_link }}" class="btn btn-primary" target="_blank">Lihat Hasil Portofolio</a>
        @endif
    </div>
</section>
@endsection
