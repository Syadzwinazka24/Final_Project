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
            @include('userPetugas.infoUKS.showInfo')
            @include('userPetugas.infoUKS.updateInfo')
            @include('userPetugas.infoUKS.deleteInfo')
            @endforeach
        </tbody>
    </table>
    
</div>

<!-- Modal -->

<div class="modal" tabindex="-1" id="modal-default">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('petugas.tambah.info')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">

                        <label for="judul_info">Judul Info</label>
                        <input type="text" id="judul_info" name="judul_info" class="form-control" required><br>

                        <label for="isi_info">Waktu Pelaksanaan</label>
                        <input type="text" id="isi_info" name="isi_info" class="form-control" required><br>

                        <label for="penerbit">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" class="form-control" required><br>

                        <div class="mb-3">
                            <div class="form-group">
                                <label for="img">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="img" class="form-control" id="img">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control  @error('deskripsi') is-invalid @enderror" id="modal-default" name="deskripsi" rows="3" placeholder="Enter ..."></textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                <strong>{{ $message}}</strong>
                            </div>
                            @enderror
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
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
   
</div>


@endsection

@section('ckEditor')

<script>
    ClassicEditor
        .create(document.querySelector('#modal-default'))
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    CKEDITOR.replace('deskripsi');

    function saveContent(){
        var content = CKEDITOR.instances.editor.getData();
        $('#modal-default').modal('hide')
    }
</script>

@endsection