@extends('Layout.template')

@section('konten')

<div class="table-header">
    <h3 class="table-title">Data Restoran</h3>
    <a class="btn btn-success btn-add" href="{{ route('menu.create') }}">
        <i class="fas fa-plus me-2"></i>Tambah Menu
    </a>
</div>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Kategori</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menu as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->deskripsi }}</td>
                <td>Rp {{ number_format($s->harga, 0, ',', '.') }}</td>
                <td>{{ $s->kategori }}</td>
                <td class="action-buttons">
                    <a href="/menu/edit/{{ $s->id }}" class="btn btn-warning btn-sm" title="Edit">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('hapusmenu', $s->id) }}" method="POST" style="display: inline;">
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

@endsection
