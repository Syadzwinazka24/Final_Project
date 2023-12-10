<div class="modal" tabindex="-1" id="modal-default">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.tambah.info')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">

                        <label for="judul_info">Judul Info</label>
                        <input type="text" id="judul_info" name="judul_info" class="form-control" required><br>

                        <label for="isi_info">Waktu Pelaksanaan</label>
                        <input type="text" id="isi_info" name="isi_info" class="form-control" required><br>

                        <label for="penerbit">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" class="form-control" required><br>

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

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control  @error('deskripsi') is-invalid @enderror" id="artikel" name="deskripsi" rows="3" placeholder="Enter ..."></textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

</div>

@section('ckEditor')
<script>
    ClassicEditor
        .create(document.querySelector('#artikel'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection