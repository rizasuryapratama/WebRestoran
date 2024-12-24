@extends('Layout.templateedit')
@section('konten')
<h3 class="form-title text-center">Ubah Data Menu</h3>
@foreach($menu as $s)
      <form method="post" action="{{ route('updatemenu', ['id' => $s->id]) }}">
                @csrf
                <input type="hidden" name="id" value="{{$s->id}}">
                
                <div class="form-group">
                    <label class="form-label">Nama makanan</label>
                    <input type="text" name="nama" value="{{$s->nama}}" 
                    class="form-control" placeholder="Masukkan menu makanan" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" value="{{$s->deskripsi}}" 
                    class="form-control" placeholder="Masukkan tempat lahir" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="number" name="harga" value="{{$s->harga}}" 
                        class="form-control" placeholder="Masukkan harga" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="kategori" value="{{$s->kategori}}" 
                    class="form-control" placeholder="Masukkan kategori" required>
                </div>

                <button type="submit" class="btn btn-submit mt-3">Simpan Perubahan</button>
            </form>
  @endforeach
@endsection