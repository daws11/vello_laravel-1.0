@extends('layouts.app')

@section('content')
<section class="section blog-detail" id="blog-detail">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding-top: 20px;">
        <h2 class="h2 section-title underline fade-in-bottom">{{ $blog['title'] }}</h2>
        
        <!-- Gambar Utama -->
        <figure class="blog-image">
            <img src="{{ asset('assets/images/blog/' . $blog['image']) }}" alt="{{ $blog['title'] }}" class="img-responsive">
            <figcaption class="image-caption">Gambar 1: {{ $blog['title'] }}</figcaption>
        </figure>

        <!-- Paragraf Penjelasan Berita -->
        <p class="text">
            {{ $blog['content'] ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus volutpat, odio sit amet tempus sodales, mi eros dictum nisi, sed sollicitudin lectus nisi at dolor.' }}
        </p>

        <!-- Gambar Kedua (Opsional) -->
        @if(!empty($blog['second_image']))
        <figure class="blog-image">
            <img src="{{ asset('assets/images/blog/' . $blog['second_image']) }}" alt="{{ $blog['title'] }} - Additional Image" class="img-responsive">
            <figcaption class="image-caption">Gambar 2: {{ $blog['second_image_caption'] ?? 'Keterangan gambar kedua (opsional).' }}</figcaption>
        </figure>
        @endif

        <!-- Paragraf Selanjutnya (Opsional) -->
        @if(!empty($blog['additional_paragraph']))
        <p class="text">
            {{ $blog['additional_paragraph'] }}
        </p>
        @endif

        <!-- Tanggal Publikasi -->
        <div class="publish-date" style="margin-top: 15px;">
            <ion-icon name="time-outline"></ion-icon>
            <time datetime="{{ $blog['date'] }}">{{ \Carbon\Carbon::parse($blog['date'])->format('d M, Y') }}</time>
        </div>

        <!-- Tombol Melihat Hasil Portofolio (Opsional) -->
        @if(!empty($blog['portfolio_link']))
        <h2 class="h2 section-title">
        <a href="{{ $blog['portfolio_link'] }}" class="btn btn-primary" target="_blank">Lihat Hasil Portofolio</a>
          </h2>
        @endif
        
        
    </div>
</section>

@endsection
