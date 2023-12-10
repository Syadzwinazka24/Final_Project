@extends('template.base')
@section('title', 'Data infoUKS')
@section('content')

<div class="rounded h-100 p-4">
    <h3 class="mb-4">Nama Jabatan</h3>

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Jabatan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    <button href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-default">Add Jabatan</button>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Jabatan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jabatan as $row)
            @csrf
            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $row->nama_jabatan }}
                </td>

                <td>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"><i class="fa fa-solid fa-pen"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fa fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @include('Admin.Jabatan.updateJabatan')
            @include('Admin.Jabatan.deleteJabatan')
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->

<div class="modal" tabindex="-1" id="modal-default">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Nama Jabatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.tambah.jabatan')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="nama_jabatan">Nama Jabatan</label>
                        <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" required><br>
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