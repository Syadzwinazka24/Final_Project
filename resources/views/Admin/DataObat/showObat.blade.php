<!-- Modal -->

<div class="modal fade" id="show{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Data Obat</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.show.obat', $row->id) }}" method="POST">
                    @csrf
                 
                    <div class="mb-3">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" id="nama_obat" value="{{ $row->nama_obat}}" readonly><br>

                        <label for="fungsi_obat">Fungsi Obat</label>
                        <input type="text" name="fungsi_obat" class="form-control" id="fungsi_obat" value="{{ $row->fungsi_obat}}" readonly><br>

                        <label for="jumlah_obat">Jumlah Obat</label>
                        <input type="text" name="jumlah_obat" class="form-control" id="jumlah_obat" value="{{ $row->jumlah_obat}}" readonly><br>

                        <label for="kadaluarsa">Kadaluarsa</label>
                        <input type="text" name="kadaluarsa" class="form-control" id="kadaluarsa" value="{{ $row->kadaluarsa}}" readonly><br>

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