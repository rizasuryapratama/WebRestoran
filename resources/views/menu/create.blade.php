@extends('layout.templatecreate')

@section('konten')
<form method="post" action="{{route('simpanmenu')}}">
  @csrf
  
  <div class="mb-3">
      <label for="nama" class="form-label">Nama makanan</label>
      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required>
  </div>
  <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Deskripsi" required></textarea>
  </div>
  <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga" required>
  </div>
  <div class="mb-3">
      <label for="kategori" class="form-label">Kategori</label>
      <input type="text" id="kategori" name="kategori" class="form-control" placeholder="Kategori" required>
  </div>
  <div class="text-end">
      <button type="submit" class="btn btn-primary">
          <i class="fa fa-save"></i> Simpan Data
      </button>
  </div>
</form>
@endsection