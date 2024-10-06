<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserServiceController extends Controller
{
    public function saveUserData(Request $request)
    {
        $data = $request->all();

        // Dapatkan user ID dari session atau Auth
        $userId = Auth::id();

        // Simpan data JSON ke file atau ke database, tergantung kebutuhan
        // Sebagai contoh, kita simpan ke file untuk tiap user
        $filePath = 'user_data/' . $userId . '_data.json';

        Storage::disk('local')->put($filePath, json_encode($data));

        return response()->json(['message' => 'Data berhasil disimpan!', 'data' => $data]);
    }

}
