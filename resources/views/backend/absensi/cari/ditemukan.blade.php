@extends('layouts.app')

@section('content')
@php $title = 'Ditemukan'; @endphp

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border rounded">
                <div class="card-body text-center">
                    <h5 class="card-title">Data Peserta</h5>
                    <h4 class="mb-3 text-dark">{{ $peserta->nama }}</h4>

                    <p class="text-muted mb-4">
                        Kode: {{ $peserta->kode_peserta }}<br>
                        Departemen: {{ $peserta->departemen ?? 'Tidak Ada' }}
                    </p>

                    <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#TambahAbsensi{{ $peserta->id }}">
                        Absensi Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@include('backend.absensi.modal.absensi-sekarang-modal')