@extends('layouts.app')

@section('content')

<h2> Masukkan Informasi Golongan </h2>

    <form action="{{ url('golongan') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label for="">Kode Golongan</label>
            <input type="text" name="gol_kode" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Nama Golongan</label>
            <input type="text" name="gol_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-success">
        </div>
    </form>

@endsection