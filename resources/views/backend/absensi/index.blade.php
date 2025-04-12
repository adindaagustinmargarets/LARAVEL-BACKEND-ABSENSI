@extends('layouts.app')
@section('content')
@php
$title = 'List Absensi';
@endphp
<div class="container mt-3">
    <div class="mb-3">
        <button type="button" data-bs-toggle="modal" data-bs-target="#TambahAbsensiModal" class="btn btn-primary">Absensi</button>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Peserta</th>
                        <th>Nama</th>
                        <th>Departemen</th>
                        <th>Tanggal Absensi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($absensi as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->kode_peserta }}</td>
                        <td>{{ $data->nama_peserta }}</td>
                        <td>{{ $data->departemen }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, d F Y H:i:s') }}</td>
                        <td>
                            <form action="{{ route('absensi.hapus', $data->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@include('backend.absensi.modal.absensi-modal')