@extends('layouts.app')

@section('content')
<section class="section privacy-policy" id="privacy-policy">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding-top: 20px;">
        <h1 class="h2 section-title underline ">Kebijakan Privasi</h1>

        <!-- Paragraf Pengantar -->
        <p class="text">
            Di <strong>Digitalinkuy</strong>, kami berkomitmen untuk melindungi privasi dan data pribadi Anda. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi yang Anda berikan ketika menggunakan layanan kami.
        </p>

        <!-- Daftar Isi -->
        <div class="card">
            <h3 class="h3">Daftar Isi</h3>
            <ul>
                <li><a href="#informasi-kami-kumpulkan">1. Informasi yang Kami Kumpulkan</a></li>
                <li><a href="#penggunaan-informasi">2. Bagaimana Kami Menggunakan Informasi Anda</a></li>
                <li><a href="#penyimpanan-keamanan-data">3. Penyimpanan dan Keamanan Data</a></li>
                <li><a href="#berbagi-informasi">4. Berbagi Informasi dengan Pihak Ketiga</a></li>
                <li><a href="#penggunaan-cookies">5. Penggunaan Cookies</a></li>
                <li><a href="#hak-anda">6. Hak Anda</a></li>
                <li><a href="#perubahan-kebijakan">7. Perubahan Kebijakan Privasi</a></li>
                <li><a href="#hubungi-kami">8. Hubungi Kami</a></li>
            </ul>
        </div>

        <!-- Informasi yang Kami Kumpulkan -->
        <h3 id="informasi-kami-kumpulkan" class="h3 ">1. Informasi yang Kami Kumpulkan</h3>
        <p class="text">
            Kami mengumpulkan informasi pribadi dan non-pribadi dari Anda untuk menyediakan dan meningkatkan layanan kami. Informasi ini dapat mencakup:
        </p>
        <ul class="text">
            <li>Informasi pribadi seperti nama, alamat email, nomor telepon, dan alamat yang Anda berikan secara langsung.</li>
            <li>Data teknis seperti alamat IP, jenis browser, perangkat yang digunakan, dan waktu akses ke situs kami.</li>
            <li>Informasi penggunaan termasuk bagaimana Anda menggunakan situs dan layanan kami, halaman yang dikunjungi, dan aktivitas yang dilakukan di platform kami.</li>
            <li>Cookies dan teknologi pelacakan lainnya untuk meningkatkan pengalaman pengguna di situs kami.</li>
        </ul>

        <!-- Penggunaan Informasi -->
        <h3 id="penggunaan-informasi" class="h3 ">2. Bagaimana Kami Menggunakan Informasi Anda</h3>
        <p class="text">
            Kami menggunakan informasi yang kami kumpulkan untuk berbagai keperluan, termasuk:
        </p>
        <ul class="text">
            <li>Memberikan akses ke layanan kami, termasuk pembuatan akun dan pemrosesan transaksi.</li>
            <li>Meningkatkan layanan kami dengan menganalisis penggunaan situs dan feedback Anda.</li>
            <li>Menghubungi Anda terkait layanan, pembaruan, promosi, atau informasi penting lainnya.</li>
            <li>Mengelola, melindungi, dan mengoptimalkan situs dan layanan kami secara teknis.</li>
            <li>Menyediakan dukungan pelanggan dan menangani pertanyaan atau keluhan Anda.</li>
        </ul>

        <!-- Penyimpanan dan Keamanan Data -->
        <h3 id="penyimpanan-keamanan-data" class="h3 ">3. Penyimpanan dan Keamanan Data</h3>
        <p class="text">
            Kami menyimpan data pribadi Anda selama diperlukan untuk memenuhi tujuan pengumpulan, kecuali diharuskan oleh hukum untuk menyimpan data lebih lama. Kami menggunakan langkah-langkah keamanan yang tepat untuk melindungi data Anda dari akses, penggunaan, atau pengungkapan yang tidak sah, termasuk enkripsi dan kontrol akses.
        </p>

        <!-- Berbagi Informasi dengan Pihak Ketiga -->
        <h3 id="berbagi-informasi" class="h3 ">4. Berbagi Informasi dengan Pihak Ketiga</h3>
        <p class="text">
            Kami tidak akan membagikan informasi pribadi Anda kepada pihak ketiga tanpa persetujuan Anda, kecuali dalam situasi berikut:
        </p>
        <ul class="text">
            <li>Jika diwajibkan oleh hukum atau dalam menanggapi permintaan pemerintah atau otoritas hukum.</li>
            <li>Jika diperlukan untuk melindungi hak, privasi, keselamatan, atau properti Digitalinkuy atau publik.</li>
            <li>Dalam situasi merger, akuisisi, atau penjualan aset di mana informasi pribadi Anda mungkin menjadi bagian dari aset yang ditransfer.</li>
            <li>Kami bekerja dengan penyedia layanan pihak ketiga untuk membantu dalam operasi bisnis kami (misalnya, pemrosesan pembayaran, analisis data) dan hanya memberikan informasi yang diperlukan bagi mereka untuk melakukan layanan tersebut.</li>
        </ul>

        <!-- Penggunaan Cookies -->
        <h3 id="penggunaan-cookies" class="h3 ">5. Penggunaan Cookies</h3>
        <p class="text">
            Kami menggunakan cookies dan teknologi serupa untuk mengumpulkan data penggunaan situs, memahami preferensi pengguna, dan meningkatkan pengalaman Anda di situs kami. Cookies adalah file kecil yang disimpan di perangkat Anda untuk mengingat informasi tentang kunjungan Anda. Anda dapat mengelola preferensi cookie Anda melalui pengaturan browser.
        </p>

        <!-- Hak Pengguna -->
        <h3 id="hak-anda" class="h3 ">6. Hak Anda</h3>
        <p class="text">
            Anda memiliki hak-hak berikut sehubungan dengan data pribadi Anda:
        </p>
        <ul class="text">
            <li>Hak untuk mengakses data pribadi Anda dan mendapatkan salinan informasi tersebut.</li>
            <li>Hak untuk memperbarui atau mengoreksi informasi pribadi yang tidak akurat atau tidak lengkap.</li>
            <li>Hak untuk meminta penghapusan data pribadi Anda, kecuali jika kami harus menyimpan data tersebut sesuai dengan hukum yang berlaku.</li>
            <li>Hak untuk menolak atau membatasi pemrosesan data pribadi Anda dalam kondisi tertentu.</li>
        </ul>

        <!-- Perubahan Kebijakan -->
        <h3 id="perubahan-kebijakan" class="h3 ">7. Perubahan Kebijakan Privasi</h3>
        <p class="text">
            Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu untuk mencerminkan perubahan dalam praktik kami atau untuk alasan operasional, hukum, atau peraturan. Kami akan memberikan pemberitahuan tentang perubahan tersebut melalui situs web kami.
        </p>

        <!-- Hubungi Kami -->
        <h3 id="hubungi-kami" class="h3 ">8. Hubungi Kami</h3>
        <p class="text">
            Jika Anda memiliki pertanyaan tentang kebijakan privasi ini atau ingin menggunakan hak Anda terkait informasi pribadi, silakan hubungi kami di:
            <a href="mailto:info@digitalinkuy.com">info@digitalinkuy.com</a>.
        </p>
    </div>
</section>

<style>
    .card {
    background-color: #ffffff; /* Warna latar card */
    border: 1px solid #ddd; /* Border card */
    border-radius: 8px; /* Radius sudut card */
    padding: 20px; /* Padding dalam card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan */
    margin-bottom: 20px; /* Jarak bawah card */
}

.card h3 {
    margin-top: 0; /* Hilangkan margin atas judul dalam card */
}

.card ul {
    list-style-type: none; /* Hilangkan bullet point */
    padding-left: 0; /* Hilangkan padding kiri */
}

.card ul li {
    margin-bottom: 10px; /* Jarak antar item */
}

.card ul li a {
    color: #800080; /* Warna tautan (ungu) */
    text-decoration: none; /* Hilangkan garis bawah pada tautan */
}

.card ul li a:hover {
    text-decoration: underline; /* Garis bawah saat hover */
}

    </style>

@endsection
