<?php

namespace App\Http\Controllers\Backend\Peserta;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function cari_peserta(Request $request)
    {
        $peserta = Peserta::where('kode_peserta', $request->kode_peserta)->first();
        if (!$peserta) {
            return response()->json([
                'error' => 'Tidak Ditemukan',
            ], 401);
        }
        return view('backend.absensi.cari.ditemukan', compact('peserta'));
    }
}
