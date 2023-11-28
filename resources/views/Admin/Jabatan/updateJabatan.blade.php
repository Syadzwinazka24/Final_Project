<div class="modal" tabindex="-1" id="edit{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Nama Jabatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.update.jabatan', $row->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="nama_jabatan">Nama Jabatan</label>
                        <input type="text" value="{{ $row->nama_jabatan }}" id="nama_jabatan" name="nama_jabatan" class="form-control" required><br>     
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