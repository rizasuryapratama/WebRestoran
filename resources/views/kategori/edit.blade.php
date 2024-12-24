@extends('layout2.templatecreate')

@section('konten')
@foreach($kategori as $s)
<form method="post" action="{{ route('updatekategori', ['id' => $s->id]) }}">
    @csrf
    <input type="hidden" name="id" value="{{$s->id}}">
    <div class="mb-3">
        <label for="kategori" class="form-label">Ubah Kategori</label>
        <input type="text" name="namakategori" value="{{$s->namakategori}}" 
        class="form-control" placeholder="Masukkan nama kategori" required>
    </div>
    <button type="submit" class="btn btn-success w-100">Simpan</button>
</form>
  @endforeach
  @endsection