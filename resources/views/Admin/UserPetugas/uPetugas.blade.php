@extends('template.base')
@section('title', 'user Petugas')
@section('content')

<div class="rounded h-100 p-4">
    <h3 class="mb-4">Nama user Petugas</h3>

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">U.Petugas</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    
    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-default">Add Data</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Petugas</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($User as $row)
        @csrf
            <tr>

                <td>
                {{ $loop->iteration }}
                </td>

                <td>
                 {{ $row->name }}
                </td>

                <td>
                 {{ $row->email }}
                </td>

                <td>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fa fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @include('Admin.UserPetugas.deleteUpetugas')
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->

<div class="modal" tabindex="-1" id="modal-default">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Nama Upetugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Admin.tambah.Upetugas')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Nama Petugas</label>
                        <input type="text" id="name" name="name" class="form-control" required><br>
                    </div>

                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control" required><br>
                    </div>

                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input type="text" id="password" name="password" class="form-control" required><br>
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