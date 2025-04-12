<?php

namespace App\Http\Controllers\Backend\Absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Peserta;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        $peserta = Peserta::all();
        return view('backend.absensi.index', compact('absensi', 'peserta'));
    }
    public function absensi_sekarang($kode_peserta)
    {
        // Cari data peserta berdasarkan kode_peserta
        $peserta = Peserta::where('kode_peserta', $kode_peserta)->first();

        // Jika tidak ditemukan, arahkan kembali dengan pesan error
        if (!$peserta) {
            return redirect()->back()->with('error', 'Peserta tidak ditemukan');
        }
        // Buat data absensi
        Absensi::create([
            'kode_peserta' => $peserta->kode_peserta,
            'nama_peserta' => $peserta->nama,
            'departemen' => $peserta->departemen,
        ]);
        return redirect()->route('absensi.list')->with('success', 'Berhasil absensi');
    }

    public function hapus($id)
    {
        $absensi = Absensi::find($id);
        $absensi->delete();
        return redirect()->route('absensi.list')->with('success', 'Berhasil menghapus absensi');
    }
    public function absensi_riwayat($kode_peserta)
    {
        $absensi = Absensi::where('kode_peserta', $kode_peserta)->get();
        return response()->json($absensi);
    }
}
