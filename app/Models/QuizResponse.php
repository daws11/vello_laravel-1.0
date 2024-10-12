<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'queue_number', 'description_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5', 
        'answer_6', 'answer_7', 'answer_8', 'answer_9', 'description_9'
    ];

    // Membuat nomor antrian otomatis
    public static function generateQueueNumber()
    {
        $lastRecord = self::orderBy('id', 'desc')->first();
        $lastNumber = $lastRecord ? (int) $lastRecord->queue_number : 0;
        return str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
    }
}
