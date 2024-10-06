@extends('layouts.app')

@section('content')
<section class="section service" id="service-detail" style="padding-top: 50px;">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        <h2 class="h2 section-title underline" style="text-align: center; margin-bottom: 40px;">Informasi dan Detail</h2>

        
        <form id="pricing-form" class="form-box" style="background-color: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
            
            
            <div class="info-section" style="margin-bottom: 20px;">
                <p><strong>Service:</strong> {{ $serviceData }}</p>
                <p><strong>Jenis Aplikasi:</strong> {{ $jenisAplikasi }}</p>
                <p><strong>Fitur yang Dipilih:</strong> {{ implode(', ', $serviceFeature) }}</p>
            </div>
            <div class="form-group">
                <label for="customer-name">Nama</label>
                <input type="text" id="customer-name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="company-name">Nama Perusahaan / Organisasi / Brand</label>
                <input type="text" id="company-name" class="form-control">
            </div>
            <div class="form-group">
                <label for="app-name">Nama Aplikasi</label>
                <input type="text" id="app-name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="app-details">Detail Singkat Aplikasi</label>
                <input type="text" id="app-details" class="form-control" maxlength="100" required>
            </div>
            
            
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="start-date" style="display: block; margin-bottom: 10px;">Pilih Tanggal Mulai:</label>
                <input type="date" id="start-date" name="start-date" class="form-control" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="end-date" style="display: block; margin-bottom: 10px;">Pilih Tanggal Selesai:</label>
                <input type="date" id="end-date" name="end-date" class="form-control" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
            </div>

           
            <p id="total-days" style="font-weight: bold; margin-bottom: 20px;">Total Hari: 0 hari</p>

           
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="price-input" style="display: block; margin-bottom: 10px;">Masukkan Harga yang anda tawarkan:</label>
                <input type="text" id="price-input" name="price" data-features-count="{{ count($serviceFeature) }}" data-service-data="{{ $serviceData }}" data-jenis-aplikasi="{{ $jenisAplikasi }}" data-service-feature="{{ json_encode($serviceFeature) }}" min="0" required class="form-control" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
            </div>

            
            <p id="min-price-message" style="color: red; display: none; font-weight: bold; margin-bottom: 20px;">Harga yang direkomendasikan adalah Rp 0</p>

            
            <button type="button"  id="whatsapp-button" class="btn btn-primary" style="width: 100%; padding: 15px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; font-size: 18px; cursor: pointer;">Konfirmasi dan Simpan</button>
        </form>
         >
        <div id="popup-confirmation" class="popup-overlay">
            <div class="popup-content" style="text-align: center;">
                <h3>Konfirmasi</h3>
                <p>Anda akan dialihkan ke aplikasi WhatsApp. Apakah Anda setuju untuk melanjutkan?</p>
                <div style="margin-top: 20px;">
                    <button id="confirm-continue" class="btn btn-primary" style="margin-right: 10px;">Setuju dan Lanjutkan</button>
                    <button id="close-popup" class="btn btn-primary" style="margin-top: 10px;">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    const serviceData = @json($serviceData);
    const jenisAplikasi = @json($jenisAplikasi);
    const serviceFeature = @json(implode(', ', $serviceFeature));
</script>
<script src="{{ asset('assets/js/serviceDetail.js') }}"></script>
@endsection
