<!-- Modal -->

<div class="modal fade" id="show{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Pasien</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.show.pasien', $row->id) }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" value="{{ $row->nama_pasien}}" readonly><br>

                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $row->tanggal_lahir}}" readonly><br>

                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{ $row->jenis_kelamin}}" readonly><br>

                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas" value="{{ $row->kelas}}" readonly><br>

                        <label for="jabatan_id">Nama Jabatan</label>
                        <input type="text" name="jabatan_id" class="form-control" id="jabatan_id" value="{{ $row->jabatan->nama_jabatan}}" readonly><br>

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