<div class="modal" tabindex="-1" id="edit{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.update.obat', $row->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">

                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" value="{{ $row->nama_obat }}" id="nama_obat" name="nama_obat" class="form-control" required><br>

                        <label for="fungsi_obat">Fungsi Obat</label>
                        <input type="text" value="{{ $row->fungsi_obat }}" id="fungsi_obat" name="fungsi_obat" class="form-control" required><br>

                        <label for="jumlah_obat">Jumlah Obat</label>
                        <input type="text" value="{{ $row->jumlah_obat }}" id="jumlah_obat" name="jumlah_obat" class="form-control" required><br>

                        <div class="form mb-3">
                            <label for="status">Pilih Status</label>
                            <select class="form-select" name="status" id="status" aria-label="Floating label select example">
                            <option value="{{ $row->status }}">{{ $row->status }}</option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Tidak tersedia">Tidak tersedia</option>
                            </select>
                        </div>

                        <label for="kadaluarsa">Kadaluarsa</label>
                        <input type="text" value="{{ $row->kadaluarsa }}" id="kadaluarsa" name="kadaluarsa" class="form-control" required><br>

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