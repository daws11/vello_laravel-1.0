@extends('layouts.app')

@section('content')
    <h1 class="section-title" style="margin-top: 80px;">Daftar Blog - Halaman Admin</h1>

    <a href="{{ route('admin.create') }}" class="btn btn-primary" >Tambah Blog Baru</a>

    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Slug</th>
                    <th>Tipe</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->slug }}</td>
                    <td>{{ ucfirst($blog->type) }}</td>
                    <td>
                        <!-- Bootstrap styled Edit button -->
                        <a href="{{ route('admin.edit', $blog->id) }}" class="btn btn-primary">Edit</a>

                        <!-- Bootstrap styled Delete button -->
                        <form action="{{ route('admin.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary" style="margin-top: 7px;" >Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
