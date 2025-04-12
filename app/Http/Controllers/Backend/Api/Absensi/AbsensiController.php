<?php

namespace App\Http\Controllers\Backend\Api\Absensi;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        return response()->json($absensi);
    }
}
