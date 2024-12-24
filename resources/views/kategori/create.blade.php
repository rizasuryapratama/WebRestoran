@extends('layout2.templatecreate')

@section('konten')
 
  <form action="{{route('simpankategori')}}" method="post"> 
    @csrf
    <div class="mb-3">
      <label for="kategori" class="form-label">Nama Kategori</label>
      <input type="text" class="form-control" id="namakategori" name="namakategori" placeholder="Masukkan nama kategori" required>
    </div>
    <button type="submit" class="btn btn-success w-100">Simpan</button>
  </form>
  @endsection