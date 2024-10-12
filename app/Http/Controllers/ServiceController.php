<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showQuiz()
    {
        // Array pertanyaan dan opsi jawaban
        $questions = [
            [
                'question' => 'Bagaimana bisnis Anda menjalankan proses utama saat ini?',
                'options' => ['Deskripsi singkat']
            ],
            [
                'question' => 'Apakah Anda menggunakan teknologi untuk sebagian besar operasional?',
                'options' => ['Ya', 'Tidak', 'Sebagian']
            ],
            [
                'question' => 'Apa tujuan utama Anda dalam 6-12 bulan ke depan?',
                'options' => ['Meningkatkan efisiensi', 'Meningkatkan penjualan', 'Memperluas pasar', 'Lainnya (jelaskan)']
            ],
            [
                'question' => 'Apakah Anda merasa operasional bisnis saat ini lambat atau memakan banyak waktu?',
                'options' => ['Ya', 'Tidak']
            ],
            [
                'question' => 'Apakah pelanggan dapat mengakses layanan atau produk Anda secara online?',
                'options' => ['Ya', 'Tidak', 'Sebagian']
            ],
            [
                'question' => 'Apakah Anda mengalami kesulitan dalam mengelola data atau informasi bisnis?',
                'options' => ['Ya', 'Tidak']
            ],
            [
                'question' => 'Seberapa siap tim Anda untuk beradaptasi dengan teknologi baru?',
                'options' => ['Sangat siap', 'Siap', 'Perlu pelatihan lebih lanjut']
            ],
            [
                'question' => 'Seberapa baik Anda merasa memahami apa yang dilakukan pesaing dalam hal digitalisasi?',
                'options' => ['1 (Sangat Buruk)', '2', '3', '4', '5 (Sangat Baik)']
            ],
            [
                'question' => 'Apakah Anda sudah memiliki anggaran khusus untuk digitalisasi?',
                'options' => ['Ya', 'Tidak', 'Sedang dipertimbangkan']
            ],
            [
                'question' => 'Apa kendala utama yang Anda hadapi dalam adopsi teknologi digital?',
                'options' => ['Biaya', 'Sumber Daya Manusia', 'Kurangnya pemahaman teknologi', 'Lainnya (jelaskan)']
            ]
        ];

        // Mengirimkan data pertanyaan ke view 'services'
        return view('services', compact('questions'));
    }
}
