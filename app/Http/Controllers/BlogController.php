<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Menampilkan halaman blog utama
    public function index()
    {
        // Ambil data blog dari database atau array statis sementara
        $blogs = [
            [
                'title' => 'Hive Project',
                'slug' => 'hive-project',
                'description' => 'Hive Project merupakan website e-commerce dari UKM HIPMI PT TELKOM yang didedikasikan untuk kompetisi P2MW.',
                'date' => '2023-04-12',
                'image' => 'hive intro.jpg' ,
                'type' => 'portofolio'
            ],
            [
                'title' => 'Polda Metro Jaya Crime Dashboard',
                'slug' => 'polda-metro-jaya-crime-dashboard',
                'description' => 'Aplikasi Web Visualisasi data untuk pemangku kepentingan internal Polda Metro Jaya, menampilkan visualisasi data kriminalitas di wilayah hukum DKI Jakarta.',
                'date' => '2022-12-29',
                'image' => 'polda intro.jpg',
                'type' => 'portofolio' 
            ],
            [
                'title' => 'Warehouse Management Mobile App',
                'slug' => 'warehouse-management',
                'description' => 'Aplikasi mobile untuk mengumpulkan data barang di gudang penyimpanan untuk PT Nusa Tech Solution.',
                'date' => '2023-06-07',
                'image' => 'warehouse intro.jpg',
                'type' => 'portofolio'
            ],
            [
                'title' => 'My New Shantika Mobile App',
                'slug' => 'new-shantika-app',
                'description' => 'Aplikasi mobile untuk pemesanan tiket online PO Bus New Shantika.',
                'date' => '2023-01-12',
                'image' => 'newsha intro.png',
                'type' => 'portofolio'
            ],
            [
                'title' => 'Tentang Kami',
                'slug' => 'tentang-kami',
                'description' => 'Mobile application for online ticket booking of PO Bus New Shantika.',
                'date' => '2022-12-04',
                'image' => 'logo png.png',
                'type' => 'blog'
            ]
        ];

        return view('blog.index', compact('blogs'));
    }

    // Menampilkan detail blog berdasarkan slug
    public function show($slug)
    {
        // Data blog berdasarkan slug
        $blog = [
            'hive-project' => [
                'title' => 'Hive Project',
                'content' => 'Hive Project adalah sebuah platform e-commerce inovatif yang lahir dari kolaborasi antara UKM HIPMI dan Telkom University. Dirancang khusus untuk menjadi tulang punggung kompetisi P2MW, Hive Project menyediakan wadah bagi para pelaku usaha mikro, kecil, dan menengah untuk menjaddi jembatan dalam penyediaan supply konveksi',
                'date' => '2023-04-12',
                'image' => 'hive intro.jpg',
                'second_image' => 0, 
                'second_image_caption' => 0,
                'additional_paragraph' => 'Sebagai bagian dari ekosistem digital yang terus berkembang, Hive Project tidak hanya sebatas platform jual beli biasa. Platform ini dilengkapi dengan berbagai fitur canggih yang dirancang untuk mempermudah para penjual dalam mengelola toko online mereka, mulai dari pembuatan katalog produk yang menarik hingga pengelolaan pesanan dan pengiriman. Selain itu, Hive Project juga memberikan kemudahan bagi pembeli dengan menyediakan sistem pembayaran yang aman dan beragam pilihan pengiriman.',
                'portfolio_link' => 0
            ],
            'tentang-kami' => [
                'title' => 'Tentang Kami',
                'content' => 'Vello Tech Adalah Start Up jasa penyedia layanan pembuatan aplikasi dan website dibawah naungan PT. VELLO TECHNOLOGY DIGITAL. Vello didirikan oleh sekumpulan mahasiswa tingkat akhir dari Telkom University pada tanggal 2 Desember 2023 di Bento Kopi Bojongsoang. Kelahiran Vello berawal dari ide dan kebutuhan dari perkumpulan mahasiswa tingkat akhir Telkom University jurusan Informatika yang membutuhkan kegiatan untuk mengisi waktu luangnya sembari mengerjakan skripsi sekaligus menjadikan sebagai penghasilan tambahan untuk memotivasi mereka. Sekarang Vello Tech berkantor pusat di Kota Bandung, tepatnya di Jl.Purbamustika C-55 , Komp. Guruminda, Arcamanik, Bandung  yang mana adalah rumah salah satu founder dari Vello Tech.',
                'date' => '2022-03-07',
                'image' => 'logo png.png',
                'second_image' => 'motto.png', 
                'second_image_caption' => 'Motto Vello Tech',
                'additional_paragraph' => '“Dream, Develop, Deploy” atau jika diterjemahkan menjadi “Impikan, Kembangkan, Luncurkan” adalah motto sekaligus slogan dari Vello Tech yang merepresentasikan betapa mudahnya impian dari client Vello Tech dapat diwujudkan, kami dapat memberikan solusi dan ide dari permasalahan digital usaha anda. Vello dapat menjadi jembatan untuk kesuksesan usaha yang sedang anda jalankan.',
                'portfolio_link' => 0
            ],
            'polda-metro-jaya-crime-dashboard' => [
                'title' => 'Polda Metro Jaya Crime Dashboard',
                'content' => 'Project Visualisasi data mengenai tingkat kriminalitas pada wilayah hukum Polda Metrojaya dengan Sub Bidang TIK sebagai penanggung jawab porgram ini, Vello terpilih sebagai Vendor resmi melalui Lelang Vendor yang diadakan oleh Polda Metrojaya. Aplikasi Visualisasi data ini sangat dibutuhkan untuk membantu memantau tingkat persebaran kriminalitas yang ter-visualisasi-kan oleh heat map pera wilayah hukum Polda Metrojaya.',
                'date' => '2022-12-29',
                'image' => 'polda intro.jpg',
                'second_image' => 'polda tim.jpg', 
                'second_image_caption' => 'Dokumentasi tim di Polda Metro Jaya',
                'additional_paragraph' => 'Tim dari Vello tech dengan sangat antusias menangani project ini dengan serius karena dampak dan kebermanfataan nya yang akan meningkatkan kinerja Polri di daerah jabodetabek dan sekitarnya yang secara tidak langsung dapat membantu masyarakat umum dan mengurangi kriminalitas.',
                'portfolio_link' => route('blog.polda.portfolio'),
            ],
            'new-shantika-app' => [
                'title' => 'My New Shantika Mobile App',
                'content' => 'PO New Shantika merupakan salah satu PO bis yang menyediakan armada transportasi perjalan lintas jawa sampai jakarta. Dengan kebutuhan PO New Shantika untuk membuat aplikasi pemesanan tiket online maka Vello hadir sebagai solusi dari kebutuhan PO New Shantika agar dapat meningkatkan kepercayaan dan pengalaman berkendara dari pelanggan dari PO New Shantika. Aplikasi ini sudah di unggah di google play store dan dapat anda unduh melalui smartphone anda.',
                'date' => '2023-01-12',
                'image' => 'newsha intro.png',
                'second_image' => 0, 
                'second_image_caption' => 0,
                'additional_paragraph' => 0,
                'portfolio_link' => 'https://play.google.com/store/apps/details?id=com.cancreative.new_shantika&hl=en&pli=1'
            ],
            'warehouse-management' => [
                'title' => 'Warehouse Management Mobile App',
                'content' => 'Kebutuhan PT Nusa Tech Solution untuk melakukan sortir barang pada gudang konveksinya yang masih secara manual dapat menghambat efektifitas dan efisiensi dari perusahaan, maka PT Nusa Tech Solution membutuhkan digitalisasi dan automatisasi dalam proses tersebut yang dapat mempermudah proses sortir yang banyak sehingga rawan human error yang dapat merugikan perusahaan kedepannya.',
                'date' => '2023-06-07',
                'image' => 'warehouse intro.jpg',
                'second_image' => 0, 
                'second_image_caption' => 0,
                'additional_paragraph' => 'Vello hadir sebagai solusi bagi PT Nusa Tech Solution untuk mewujudkan mimpi dalam melakukan digitalisasi dan automatisasi dalam proses sortir barang di gudang konveksi PT Nusa Tech Solution sehingga dapat meminimalsisr human error dan menambah keuntungan perusahaan.',
                'portfolio_link' => 0
            ],
            
        ];

        if (!isset($blog[$slug])) {
            abort(404); // Tampilkan 404 jika slug tidak ditemukan
        }

        return view('blog.show', ['blog' => $blog[$slug]]);
    }

    public function showPoldaPortfolio()
    {
        return view('blog.polda-portfolio'); // Tampilkan view khusus yang memuat konten dari HTML yang diberikan
    }
}

