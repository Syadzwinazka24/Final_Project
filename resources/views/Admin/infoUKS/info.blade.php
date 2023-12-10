@extends('template.base')
@section('title', 'Data infoUKS')
@section('content')



<div class="rounded h-100 p-4">

    <h3 class="mb-4 d-flex">Info UKS</h3>


    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Info UKS</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->

    <button href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">Add Petugas</button>
    @include('Admin.infoUKS.create')

    <!-- Search start -->
    <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 200px; margin-left: 48rem;">
            <form action="{{ route('Info.search') }}" method="get">
                <div class="input-group-append">
                    <input type="search" name="search" class="form-control float-right" placeholder="Search">
                    <button type="submit" class="btn btn-default">
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Search -->

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Info</th>
                <th scope="col">Waktu Pelaksanaan</th>
                <th scope="col">Penerbit</th>
                <th scope="col" width="10%">image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $row)
            @csrf
            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $row->judul_info }}
                </td>

                <td>
                    {{ $row->isi_info }}
                </td>

                <td>
                    {{ $row->penerbit }}
                </td>

                <td>
                    <img src="{{ url('img') . '/' . $row->img }}" class="img-fluid">
                </td>

                <td>
                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show{{ $row->id }}"><i class="fa fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $row->id }}"><i class="fa fa-solid fa-pen"></i></a>
                    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="fa fa-solid fa-trash"></i></a>

                </td>
            </tr>
            @include('Admin.infoUKS.showInfo')
            @include('Admin.infoUKS.updateInfo')
            @include('Admin.infoUKS.deleteInfo')

            @endforeach
        </tbody>
    </table>

</div>

<!-- Modal -->

@endsection

@section('ckEditor')
<script>
    ClassicEditor
        .create(document.querySelector('#artikel'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection
@section('ckEditor1')
<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection