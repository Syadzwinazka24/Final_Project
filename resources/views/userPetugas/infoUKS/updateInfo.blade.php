<div class="modal" tabindex="-1" id="edit{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Info UKS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.update.info', $row->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">

                        <label for="judul_info">Judul Info</label>
                        <input type="text" value="{{ $row->judul_info }}" id="judul_info" name="judul_info" class="form-control" required><br>

                        <label for="isi_info">Waktu Pelaksanaan</label>
                        <input type="text" value="{{ $row->isi_info }}" id="isi_info" name="isi_info" class="form-control" required><br>

                        <label for="penerbit">Penerbit</label>
                        <input type="text" value="{{ $row->penerbit }}" id="penerbit" name="penerbit" class="form-control" required><br>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="img">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="img" class="form-control" id="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" value="{{ $row->deskripsi }}" id="deskripsi" name="deskripsi" class="form-control" required><br>
     
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