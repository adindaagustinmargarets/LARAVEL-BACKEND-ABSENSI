<?php

namespace App\Http\Controllers\Backend\Api\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index(Request $request)
    {
        $tokenKey = $request->header('Authorization');

        if (Str::startsWith($tokenKey, 'Bearer ')) {
            $tokenKey = Str::replaceFirst('Bearer ', '', $tokenKey);
        }

        $user = User::where('token_key', $tokenKey)->first();

        if (!$user) {
            return response()->json([
                'error' => 'Akses Ditolak Oleh Sistem',
                'message' => 'Token Tidak Sesuai'
            ], 401);
        }
        $peserta = Peserta::all();
        return response()->json($peserta);
    }
}
