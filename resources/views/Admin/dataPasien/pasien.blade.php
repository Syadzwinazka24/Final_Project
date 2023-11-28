@extends('template.base')
@section('title', 'Data Pasien')
@section('content')

<div class="rounded h-100 p-4">
    <h3 class="mb-4">Data Pasien</h3>

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Data Pasien</li>
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
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPasien as $row)
            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $row->nama_pasien }}
                </td>

                <td>
                    {{ $row->jenis_kelamin }}
                </td>

                <td>
                    {{ $row->kelas }}
                </td>

                <td>
                    {{ $row->jabatan->nama_jabatan }}
                </td>

                <td>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show{{ $row->id }}"><i class="fa fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"><i class="fa fa-solid fa-pen"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fa fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @include('Admin.dataPasien.showPasien')
            @include('Admin.dataPasien.updatePasien')
            @include('Admin.dataPasien.deletePasien')
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->

<div class="modal" tabindex="-1" id="modal-default">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pasien</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.tambah.pasien') }}" method="post">
                    @csrf
                    <div class="mb-2">

                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" required><br>

                        <div class="form mb-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                        </div>

                        <div class="form mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" aria-label="Floating label select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form mb-3">
                            <label for="kelas">Kelas</label>
                            <select class="form-select" name="kelas" id="kelas" aria-label="Floating label select example">
                                <option selected>Pilih Kelas</option>
                                <option value="Non-Murid">Non Murid</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                                <option value="Design">Design</option>
                                <option value="Programmer">Programmer</option>
                                <option value="Engineer">Engineer</option>
                            </select>
                        </div>

                        <div class="form mb-3">
                            <label for="jabatan_id">Nama Jabatan</label>
                            <select class="form-select" name="jabatan_id" id="jabatan_id" aria-label="Floating label select example">
                                <option selected>Pilih jabatan</option>
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
@endsection