<!-- Modal -->

<div class="modal fade" id="show{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Riwayat Penyakit</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.show.riwayat', $row->id) }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="pasien_id">Nama Pasien</label>
                        <input type="text" name="pasien_id" class="form-control" id="pasien_id" value="{{ $row->dataPasien->nama_pasien}}" readonly><br>

                        <label for="keluhan">Keluhan</label>
                        <input type="text" name="keluhan" class="form-control" id="keluhan" value="{{ $row->keluhan}}" readonly><br>

                        <label for="tindakan">Tindakan</label>
                        <input type="text" name="tindakan" class="form-control" id="tindakan" value="{{ $row->tindakan}}" readonly><br>

                        <label for="status_pasien">Status Pasien</label>
                        <input type="text" name="status_pasien" class="form-control" id="status_pasien" value="{{ $row->status_pasien}}" readonly><br>

                        <label for="id_petugas">Nama Petugas</label>
                        <input type="text" name="id_petugas" class="form-control" id="id_petugas" value="{{ $row->petugas->nama_petugas}}" readonly><br>

                        <label for="id_obat">Nama Obat</label>
                        <input type="text" name="id_obat" class="form-control" id="id_obat" value="{{ $row->obats->nama_obat}}" readonly><br>

                        <label for="created_at">Dibuat</label>
                        <input type="text" name="created_at" class="form-control" id="created_at" value="{{ $row->created_at}}" readonly><br>

                        <label for="updated_at">Diupdate</label>
                        <input type="text" name="updated_at" class="form-control" id="updated_at" value="{{ $row->updated_at}}" readonly><br>

                        <input type="hidden" name="id" value="{{ $row->id}}">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>