@extends('layout2.template')
@section('konten')
<!-- START FORM -->
        
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href="{{route('kategori.create')}}" class="btn btn-primary">+ Tambah Data</a>
    </div>
  
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">Id</th>
                <th class="col-md-3">Kategori</th>
                <th class="col-md-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $s) 
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->namakategori}}</td>
                <td>
                    <a href="/kategori/edit/{{$s->id}}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('hapuskategori', $s->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- AKHIR DATA -->
@endsection
