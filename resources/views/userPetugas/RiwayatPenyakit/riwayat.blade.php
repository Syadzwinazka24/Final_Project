@extends('template.base')
@section('title', 'Riwayat Penyakit')
@section('content')

<div class="rounded h-100 p-4">
    <h3 class="mb-4">Data Riwayat Penyakit</h3>

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Riwayat</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    <button href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-default">Add Pasien</button>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Tindakan</th>
                <th scope="col">Status Pasien</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayatPenyakit as $row)
            @csrf
            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $row->dataPasien->nama_pasien }}
                </td>

                <td>
                    {{ $row->keluhan }}
                </td>

                <td>
                    {{ $row->tindakan }}
                </td>

                <td>
                    {{ $row->status_pasien }}
                </td>

                <td>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show{{ $row->id }}"><i class="fa fa-solid fa-eye"></i></a>
                    <a href="{{ route('petugas.edit.riwayat', $row->id) }}" class="btn btn-primary"><i class="fa fa-solid fa-pen"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fa fa-solid fa-trash"></i></a>

                </td>
            </tr>
            @include('userPetugas.RiwayatPenyakit.showRiwayat')
            @include('userPetugas.RiwayatPenyakit.deleteRiwayat')
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->

<div class="modal" tabindex="-1" id="modal-default">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Riwayat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.tambah.riwayat')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <div class="form mb-3">
                            <label for="pasien_id">Nama Pasien</label>
                            <select class="form-select" name="pasien_id" id="pasien_id" aria-label="Floating label select example">
                                <option selected>Pilih Pasien</option>
                                @foreach ($dataPasien as $row)
                                <option value="{{ $row->id }}" {{ old('pasien_id') == $row->id ? 'selected' : '' }}>
                                    {{ $row->nama_pasien }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <label for="keluhan">Keluhan</label>
                        <input type="text" id="keluhan" name="keluhan" class="form-control" required><br>

                        <label for="tindakan">Tindakan</label>
                        <input type="text" id="tindakan" name="tindakan" class="form-control" required><br>

                        <div class="form mb-3">
                            <label for="status">Status</label>
                            <select class="form-select" name="status_pasien" id="status_pasien" aria-label="Floating label select example">
                                <option selected>Pilih Status</option>
                                <option value="Rawat Inap">Rawat Inap</option>
                                <option value="Rawat jalan">Rawat jalan</option>
                            </select>
                        </div>

                        <div class="form mb-3">
                            <label for="id_petugas">Nama Petugas</label>
                            <select class="form-select" name="id_petugas" id="id_petugas" aria-label="Floating label select example">
                                <option selected>Pilih Petugas</option>
                                @foreach ($petugas as $row)
                                <option value="{{ $row->id }}" {{ old('id_petugas') == $row->id ? 'selected' : '' }}>
                                    {{ $row->nama_petugas }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form mb-3">
                            <label for="id_obat">Nama Obat</label>
                            <select class="form-select" name="id_obat" id="id_obat" aria-label="Floating label select example">
                                <option selected>Pilih Obat</option>
                                @foreach ($obats as $row)
                                <option value="{{ $row->id }}" {{ old('id_obat') == $row->id ? 'selected' : '' }}>
                                    {{ $row->nama_obat }}
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
@endsection