@extends('template.base')
@section('title', 'Data Obat')
@section('content')
<div class="rounded h-100 p-4 col-sm-12 col-xl-12">
    <div class=" rounded h-100 p-4">
        <h4 class="mb-4">Form Obat</h4>
        <form action="{{ route('Admin.create.obat')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="form mb-3">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" class="form-control" name="nama_obat" id="nama_obat">
            </div>

            <div class="form mb-3">
                <label for="fungsi_obat">Fungsi Obat</label>
                <input type="text" class="form-control" name="fungsi_obat" id="fungsi_obat">
            </div>

            <div class="form mb-3">
                <label for="jumlah_obat">Jumlah Obat</label>
                <input type="text" class="form-control" name="jumlah_obat" id="jumlah_obat">
            </div>

            <div class="form mb-3">
                <label for="status">Pilih Status</label>
                <select class="form-select" name="status" id="status" aria-label="Floating label select example">
                    <option value="Tersedia">Tersedia</option>
                    <option value="Tidak tersedia">Tidak tersedia</option>
                </select>
            </div>

            <div class="form mb-3">
                <label for="kadaluarsa">Kadaluarsa</label>
                <input type="date" class="form-control" name="kadaluarsa" id="kadaluarsa">
            </div>

            <div class="form mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>
</div>
@endsection