@extends('layouts.app')

@section('content')
<section class="section blog" id="blog">
    <div class="container">
        <h2 class="h2 section-title underline fade-in-bottom">Blog & Portofolio</h2>
        <ul class="blog-list">
            @foreach ($blogs as $blog)
            <li>
                <div class="blog-card fade-in-top">
                    <figure class="banner">
                        <a href="{{ route('blog.show', $blog->slug) }}">
                            <img src="{{ asset('assets/images/blog/' . $blog->image) }}" width="750" height="350" loading="lazy" alt="{{ $blog->title }}" class="img-cover">
                        </a>
                    </figure>
                    <div class="content">
                        <h3 class="h3 title">
                            <a href="{{ route('blog.show', $blog->slug) }}">
                                {{ $blog->title }}
                            </a>
                        </h3>
                        <p class="text">
                            {{ Str::limit($blog->content_paragraphs[0], 100) }} <!-- Menampilkan cuplikan paragraf pertama -->
                        </p>
                        <span class="tag {{ $blog->type === 'portofolio' ? 'tag-portfolio' : 'tag-blog' }}">
                            {{ ucfirst($blog->type) }}
                        </span>
                        <div class="meta">
                            <div class="publish-date">
                                <ion-icon name="time-outline"></ion-icon>
                                <time datetime="{{ $blog->date }}">{{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}</time>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection
