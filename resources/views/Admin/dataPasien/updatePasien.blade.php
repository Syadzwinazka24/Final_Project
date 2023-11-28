<div class="modal" tabindex="-1" id="edit{{ $row->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Pasien</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.update.pasien', $row->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">

                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" value="{{ $row->nama_pasien }}" id="nama_pasien" name="nama_pasien" class="form-control" required><br>


                        <div class="form mb-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $row->tanggal_lahir }}">
                        </div>

                        <div class="form mb-3">
                            <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="{{ $row->jenis_kelamin }}">{{ $row->jenis_kelamin }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form mb-3">
                            <label for="kelas">Pilih Kelas</label>
                            <select class="form-select" name="kelas" id="kelas" aria-label="Floating label select example">
                                <option value="{{ $row->kelas }}">{{ $row->kelas }}</option>
                                <option value="Non-Murid">Non Murid</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                                <option value="Design">Design</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Engineer">Engineer</option>
                            </select>
                        </div>

                        <div class="form mb-3">
                            <label for="kelas">Pilih Nama Jabatan</label>
                            <select class="form-select" name="jabatan_id" id="jabatan_id" aria-label="Floating label select example" value="{{ $row->jabatan_id }}">
                                <option value="{{ $row->jabatan_id }}">{{ $row->Jabatan->nama_jabatan }}</option>
                                @foreach ($jabatan as $row)
                                <option value="{{ $row->id }}" {{ old('jabatan_id') == $row->id ? 'selected' : '' }}>
                                    {{ $row->nama_jabatan }}
                                </option>
                                @endforeach
                            </select>
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
</div>