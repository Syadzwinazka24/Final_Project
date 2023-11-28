<!-- Modal -->

<div class="modal fade" id="show{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Data Petugas</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('Admin.show.petugas', $row->id)}}" method="POST">
                    @csrf
                 
                    <div class="mb-3">
                        <label for="nama_Petugas">Nama Petugas</label>
                        <input type="text" name="nama_Petugas" class="form-control" id="nama_Petugas" value="{{ $row->nama_petugas}}" readonly><br>

                        <label for="no_telp">No Telp</label>
                        <input type="text" name="no_telp" class="form-control" id="no_telp" value="{{ $row->no_telp}}" readonly><br>

                        <label for="NIP">NIP</label>
                        <input type="text" name="NIP" class="form-control" id="NIP" value="{{ $row->NIP}}" readonly><br>

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