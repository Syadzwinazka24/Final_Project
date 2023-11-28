@extends('template.base')
@section('title', 'Data Petugas')
@section('content')

<div class="rounded h-100 p-4">
    <h3 class="mb-4">Data Petugas</h3>

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Petugas UKS</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    <button href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-default">Add Petugas</button>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Petugas</th>
                <th scope="col">No_telp</th>
                <th scope="col">NIP</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $row)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $row->nama_petugas }}
                </td>
                <td>
                    {{ $row->no_telp }}
                </td>

                <td>
                    {{ $row->NIP }}
                </td>

                <td>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show{{ $row->id }}"><i class="fa fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"><i class="fa fa-solid fa-pen"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fa fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @include('Admin.Petugas.updatePetugas')
            @include('Admin.Petugas.deletePetugas')
            @include('Admin.petugas.showPetugas')
            @endforeach



        </tbody>
    </table>
</div>

<!-- Modal -->

<div class="modal" tabindex="-1" id="modal-default">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.tambah.petugas')}}" method="post">
                    @csrf
                    <div class="mb-2">

                        <label for="nama_petugas">Nama Petugas</label>
                        <input type="text" id="nama_petugas" name="nama_petugas" class="form-control" required><br>

                        <label for="no_telp">No Telp</label>
                        <input type="number" id="no_telp" name="no_telp" class="form-control" required><br>

                        <label for="NIP">NIP</label>
                        <input type="text" id="NIP" name="NIP" class="form-control" required><br>
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