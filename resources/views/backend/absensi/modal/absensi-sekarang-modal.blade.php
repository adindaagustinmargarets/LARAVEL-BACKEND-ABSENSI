<div class="modal fade" id="TambahAbsensi{{ $peserta->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Lakukan Absensi Sekarang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('absensi.absensi-sekarang', $peserta->kode_peserta) }}" method="post">
                @csrf
                <div class="modal-body">
                    <p>Absensi Sekarang?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Absensi Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</div>