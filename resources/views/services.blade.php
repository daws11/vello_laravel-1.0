@extends('layouts.app')

@section('content')
<section class="section service" id="services" style="padding-top: 100px;">
    <div class="container">
        <!-- Menambahkan loader -->
        <div id="loader" class="loader" style="display: none;"></div>

        <!-- Menampilkan judul section -->
        <h2 class="h2 section-title underline fade-in-top fade-in" id="section-title">{{ $services['title'] }}</h2>

        <!-- Tambahkan tombol Back di atas -->
        <a><button class="btn fade-in-top back-btn"><ion-icon name="arrow-back-outline"></ion-icon></button></a>

        <!-- Tambahkan container untuk service-list dan loader -->
        <div class="service-list-container">
            <ul class="service-list fade-in" id="service-list">
                @foreach ($services['cards'] as $card)
                    <li>
                        <div class="service-card fade-in-bottom" data-id="{{ $card['data_id'] }}">
                            <div class="card-icon">
                                <ion-icon name="{{ $card['icon'] }}"></ion-icon>
                            </div>
                            <h3 class="h3 title">{{ $card['title'] }}</h3>
                            <p class="text">{{ $card['text'] }}</p>
                            <button class="card-btn" aria-label="Show More">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<script src="{{ asset('assets/js/service.js') }}"></script>
@endsection
