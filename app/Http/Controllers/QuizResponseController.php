<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResponse;

class QuizResponseController extends Controller
{
    public function store(Request $request)
    {
        // Buat nomor antrian otomatis
        $queueNumber = QuizResponse::generateQueueNumber();

        // Simpan data quiz ke database
        $quizResponse = QuizResponse::create([
            'queue_number' => $queueNumber,
            'description_1' => $request->input('description_1'),
            'answer_2' => $request->input('answer_2'),
            'answer_3' => $request->input('answer_3'),
            'answer_4' => $request->input('answer_4'),
            'answer_5' => $request->input('answer_5'),
            'answer_6' => $request->input('answer_6'),
            'answer_7' => $request->input('answer_7'),
            'answer_8' => $request->input('answer_8'),
            'answer_9' => $request->input('answer_9'),
            'description_9' => $request->input('description_9'),
        ]);

        // Kirim nomor antrian kembali ke tampilan
        return response()->json([
            'queue_number' => $queueNumber,
        ]);
    }
}
