<div class="modal fade" id="TambahAbsensiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Lakukan Absensi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('peserta.cari-peserta') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div>
                        <label>Nama Peserta</label>
                        <select name="kode_peserta" class="form-control">
                            <option>Silhakan Pilih</option>
                            @foreach($peserta as $data)
                            <option value="{{ $data->kode_peserta }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Cari Peserta</button>
                </div>
            </form>
        </div>
    </div>
</div>