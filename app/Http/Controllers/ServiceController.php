<?php
// app/Http/Controllers/ServiceController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            'title' => 'Silahkan Pilih Salah Satu Layanan Kami',
            'cards' => [
                [
                    'icon' => 'phone-portrait-outline',
                    'title' => 'Mobile Development',
                    'text' => 'Aplikasi masa depan, sekarang. Nikmati pengalaman seluler terbaik di iOS dan Android.',
                    'data_id' => 'mobile-development'
                ],
                [
                    'icon' => 'desktop-outline',
                    'title' => 'Web Development',
                    'text' => 'Menciptakan situs web yang memukau dan responsif yang meninggalkan kesan mendalam.',
                    'data_id' => 'web-development'
                ],
                [
                    'icon' => 'people-outline',
                    'title' => 'Outsourcing (Coming Soon)',
                    'text' => 'Kurangi beban biaya perusahaan Anda. Outsourcing SDM melalui Vello adalah solusinya.',
                    'data_id' => 'outsourcing'
                ]
            ]
        ];

        return view('services', compact('services'));
    }

    public function getServiceData($serviceId)
    {
        $serviceData = [
            'mobile-development' => [
                'title' => 'Pilih Jenis Mobile App Yang Anda butuhkan',
                'cards' => [
                    [
                        'icon' => 'receipt-outline',
                        'title' => 'Jasa',
                        'text' => 'Buat jasa yang anda miliki anda lebih menarik dan profesional',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'cart-outline',
                        'title' => 'E-Commerce',
                        'text' => 'Jual produk Anda secara online dengan fitur lengkap.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'business-outline',
                        'title' => 'Perusahaan',
                        'text' => 'Tampilkan profil perusahaan Anda secara profesional.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'people-circle-outline',
                        'title' => 'Komunitas / Organisasi',
                        'text' => 'Bangun komunitas online yang solid dan interaktif.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'newspaper-outline',
                        'title' => 'Berita',
                        'text' => 'Bagikan berita terbaru dengan desain yang menarik.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'chatbox-ellipses-outline',
                        'title' => 'Forum',
                        'text' => 'Buat forum diskusi untuk berbagai topik.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'book-outline',
                        'title' => 'Pendidikan',
                        'text' => 'Buat kursus online yang interaktif dan efektif.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'logo-instagram',
                        'title' => 'Social Media',
                        'text' => 'Bangun jaringan sosial khusus untuk komunitas Anda.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'cash-outline',
                        'title' => 'Finance',
                        'text' => ' Kelola keuangan bisnis atau pribadi Anda secara online.',
                        'data_id' => 'service-feature'
                    ]
                ]
            ],

            'web-development' => [
                'title' => 'Pilih Jenis Web App Yang Anda butuhkan',
                'cards' => [
                    [
                        'icon' => 'receipt-outline',
                        'title' => 'Jasa',
                        'text' => 'Buat jasa yang anda miliki anda lebih menarik dan profesional',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'cart-outline',
                        'title' => 'E-Commerce',
                        'text' => 'Jual produk Anda secara online dengan fitur lengkap.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'business-outline',
                        'title' => 'Perusahaan',
                        'text' => 'Tampilkan profil perusahaan Anda secara profesional.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'people-circle-outline',
                        'title' => 'Komunitas / Organisasi',
                        'text' => 'Bangun komunitas online yang solid dan interaktif.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'newspaper-outline',
                        'title' => 'Berita',
                        'text' => 'Bagikan berita terbaru dengan desain yang menarik.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'chatbox-ellipses-outline',
                        'title' => 'Forum',
                        'text' => 'Buat forum diskusi untuk berbagai topik.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'book-outline',
                        'title' => 'Pendidikan',
                        'text' => 'Buat kursus online yang interaktif dan efektif.',
                        'data_id' => 'customer-service'
                    ],
                    [
                        'icon' => 'logo-instagram',
                        'title' => 'Social Media',
                        'text' => 'Bangun jaringan sosial khusus untuk komunitas Anda.',
                        'data_id' => 'service-feature'
                    ],
                    [
                        'icon' => 'cash-outline',
                        'title' => 'Finance',
                        'text' => ' Kelola keuangan bisnis atau pribadi Anda secara online.',
                        'data_id' => 'service-feature'
                    ]
                ]
            ],
 
            'service-feature' => [
                'title' => 'Pilih Fitur Yang Dibutuhkan Oleh Anda',
                'cards' => [
                    [
                        'icon' => 'cart-outline',
                        'title' => 'Shopping Cart',
                        'text' => 'Fitur yang memungkinkan pengunjung menambahkan produk ke dalam daftar belanja.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'newspaper-outline',
                        'title' => 'Blog',
                        'text' => 'Bagian dalam website yang berisi artikel atau tulisan secara berkala.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'help-circle-outline',
                        'title' => 'Customer Service',
                        'text' => 'Saluran komunikasi antara pelanggan dengan bisnis, bisa berupa formulir kontak, live chat, atau email.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'log-in-outline',
                        'title' => 'Login',
                        'text' => 'Fitur yang memungkinkan pengguna masuk ke akun mereka untuk mengakses fitur-fitur tertentu.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'server-outline',
                        'title' => 'Penyimpanan Data',
                        'text' => 'Fitur untuk menyimpan data pengguna, seperti informasi profil, riwayat pembelian, atau preferensi.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'card-outline',
                        'title' => 'Pembayaran',
                        'text' => 'Fitur yang memungkinkan pelanggan melakukan pembayaran secara online.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'chatbubbles-outline',
                        'title' => 'Chat',
                        'text' => 'Fitur percakapan real-time antara pengunjung dengan bisnis atau antar pengguna.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'notifications-outline',
                        'title' => 'Notifikasi',
                        'text' => 'Fitur untuk mengirimkan pemberitahuan kepada pengguna, seperti email atau push notification.',
                        'type' => 'feature'
                    ],
                    [
                        'icon' => 'bar-chart-outline',
                        'title' => 'Analytics',
                        'text' => 'Alat untuk melacak dan menganalisis data pengunjung website',
                        'type' => 'feature'
                    ]
                ]
            ],
        ];

        return response()->json($serviceData[$serviceId]);
    }

    public function detail(Request $request)
    {
        // Pastikan bahwa serviceFeature di-decode menjadi array
        $serviceFeature = json_decode($request->input('serviceFeature'), true);
        $serviceData = $request->input('serviceData');
        $jenisAplikasi = $request->input('jenisAplikasi');
        return view('service.detail', compact('serviceData', 'jenisAplikasi', 'serviceFeature'));
    }
}
