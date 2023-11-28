@extends('template.base')

@section('title', 'Profile')

@section('content')

<div class="rounded h-100 p-4 col-sm-12 col-xl-12">
    <h3 class="mb-4">Profile Petugas</h3>
    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right" style="margin-left: 300px; margin-top: -55px;">
                        <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ENd Header -->


    <div class=" rounded h-100 p-4">
        <form action="#" method="post" enctype="multipart/form-data">

            @csrf
            <div class="form mb-3">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" id="name" disabled value="{{ $user->name}}">
            </div>

            <div class="form mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" disabled value="{{ $user->email}}">
            </div>

            <div class="form mb-3">
            <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#edit{{ $user->id }}">Update Profile</a>
            </div>

        </form>

    </div>
</div>

<!-- Modal Update Profile -->
<div class="modal" tabindex="-1" id="edit{{ $user->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Profile Petugas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('update.profile', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">

                        <label for="name">Nama Lengkap</label>
                        <input type="text" value="{{ $user->name }}" id="name" name="name" class="form-control" required><br>

                        <label for="email">Email</label>
                        <input type="email" value="{{ $user->email }}" id="email" name="email" class="form-control" required><br>

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