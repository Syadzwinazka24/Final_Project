<div class="modal" tabindex="-1" id="edit{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.update.petugas', $row->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">

                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" value="{{ $row->nama_petugas }}" id="nama_petugas" name="nama_petugas" class="form-control" required><br>

                        <label for="no_telp">No Telp</label>
                        <input type="text" value="{{ $row->no_telp }}" id="no_telp" name="no_telp" class="form-control" required><br>

                        <label for="NIP">NIP</label>
                        <input type="text" value="{{ $row->NIP }}" id="NIP" name="NIP" class="form-control" required><br>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>