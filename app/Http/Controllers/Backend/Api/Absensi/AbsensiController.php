<?php

namespace App\Http\Controllers\Backend\Api\Absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
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
        $absensi = Absensi::all();
        return response()->json($absensi);
    }
}
