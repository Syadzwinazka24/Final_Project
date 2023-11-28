<!-- Modal -->

<div class="modal fade" id="show{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Data Info</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.show.info', $row->id)}}" method="POST">
                    @csrf
                 
                    <div class="mb-3">
                        <label for="judul_info">Judul Info</label>
                        <input type="text" name="judul_info" class="form-control" id="judul_info" value="{{ $row->judul_info}}" readonly><br>

                        <label for="isi_info">Waktu Pelaksanaan</label>
                        <input type="text" name="isi_info" class="form-control" id="isi_info" value="{{ $row->isi_info}}" readonly><br>

                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" id="penerbit" value="{{ $row->penerbit}}" readonly><br>

                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $row->deskripsi}}" readonly><br>

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