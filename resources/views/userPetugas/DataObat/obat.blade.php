@extends('template.base')
@section('title', 'Data Obat')
@section('content')

<div class="rounded h-100 p-4">
    <h3 class="mb-4">Data Obat</h3>

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Data Obat</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    <a href="{{ route('petugas.form.obat')}}">
        <button class="btn btn-primary">Add Obat</button>
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jumlah Obat</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obat as $row)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $row->nama_obat }}
                </td>

                <td>
                    {{ $row->jumlah_obat }}
                </td>

                <td>
                    {{ $row->status }}
                </td>

                <td>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show{{ $row->id }}"><i class="fa fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"><i class="fa fa-solid fa-pen"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fa fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @include('userPetugas.DataObat.showObat')
            @include('userPetugas.DataObat.updateObat')
            @include('userPetugas.DataObat.deleteObat')

            @endforeach
        </tbody>
    </table>
</div>

@endsection