@extends('template.base')

@section('title', 'Riwayat Penyakit')

@section('content')
<div class="rounded h-100 p-4 col-sm-12 col-xl-12">
    <div class=" rounded h-100 p-4">
        <h4 class="mb-4">Form edit Riwayat</h4>
        <form action="{{ route('petugas.update.riwayat', $riwayatPenyakit->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form mb-3">
                <label for="pasien_id">Nama Pasien</label>
                <select class="form-control" name="pasien_id" id="pasien_id" value="{{ $riwayatPenyakit->pasien_id}}">
                    <option value="{{ $riwayatPenyakit->pasien_id }}">{{ $riwayatPenyakit->dataPasien->nama_pasien }}</option>
                    @foreach($dataPasien as $row)
                    <option value="{{ $row->id }}" {{ old('pasien_id') == $row->id ? 'selected' : '' }}> {{ $row->nama_pasien}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form mb-3">
                <label for="keluhan">Keluhan</label>
                <input type="text" value="{{ $riwayatPenyakit->keluhan }}" id="keluhan" name="keluhan" class="form-control" required>
            </div>

            <div class="form mb-3">
                <label for="tindakan">Tindakan</label>
                <input type="text" value="{{ $riwayatPenyakit->tindakan }}" id="tindakan" name="tindakan" class="form-control" required>
            </div>

            <div class="form mb-3">
                <label for="id_petugas">Pilih Status</label>
                <select class="form-select" name="status_pasien" id="status_pasien">
                    <option value="{{ $riwayatPenyakit->status_pasien }}">{{ $riwayatPenyakit->status_pasien }}</option>
                    <option value="Rawat Inap">Rawat Inap</option>
                    <option value="Rawat Jalan">Rawat Jalan</option>
                </select>
            </div>

            <div class="form mb-3">
                <label for="id_petugas">Nama Petugas</label>
                <select class="form-control custom-select form-control-border" name="id_petugas" id="id_petugas" value="{{ $riwayatPenyakit->id_petugas}}">
                    <option value="{{ $riwayatPenyakit->id_petugas }}">{{ $riwayatPenyakit->petugas->nama_petugas }}</option>
                    @foreach($petugas as $row)
                    <option value="{{ $row->id }}" {{ old('id_petugas') == $row->id ? 'selected' : '' }}> {{ $row->nama_petugas}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form mb-3">
                <label for="id_obat">Nama Obat</label>
                <select class="form-control custom-select form-control-border" name="id_obat" id="id_obat" value="{{ $riwayatPenyakit->id_obat}}">
                    <option value="{{ $riwayatPenyakit->id_obat }}">{{ $riwayatPenyakit->obats->nama_obat }}</option>
                    @foreach($obats as $row)
                    <option value="{{ $row->id }}" {{ old('id_obat') == $row->id ? 'selected' : '' }}> {{ $row->nama_obat}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-floating mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>
</div>
@endsection