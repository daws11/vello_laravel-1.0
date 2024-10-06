<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Menampilkan halaman home
    public function index()
    {
        // Data blog yang sama seperti di BlogController
        $blogs = [
            [
                'title' => 'Hive Project',
                'slug' => 'hive-project',
                'description' => 'Hive Project merupakan website e-commerce dari UKM HIPMI PT TELKOM yang didedikasikan untuk kompetisi P2MW.',
                'date' => '2023-04-12',
                'image' => 'hive intro.jpg',
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
                'description' => 'Vello Tech adalah penyedia layanan pembuatan aplikasi dan website.',
                'date' => '2022-12-04',
                'image' => 'logo png.png',
                'type' => 'blog'
            ]
        ];

        // Ambil 4 blog pertama
        $featuredBlogs = array_slice($blogs, 0, 4);

        return view('home', compact('featuredBlogs'));
    }
}
