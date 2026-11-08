@extends('layouts.app')

@section('title', 'Daftar Proyek')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manajemen Proyek AI</h2>
        <a href="{{ route('project.create') }}" class="btn btn-primary">Tambah Proyek</a>
    </div>

    @if(session('success'))
        <x-status-banner tipe="success">
            <strong>Berhasil!</strong> {{ session('success') }}
        </x-status-banner>
    @endif

    <x-info-card>
        <x-slot:header>Daftar Proyek Saya</x-slot:header>
        <!-- Form Pencarian -->
        <form action="{{ route('project.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari judul proyek atau tema agent..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
                @if(request('search'))
                    <a href="{{ route('project.index') }}" class="btn btn-outline-danger">Reset</a>
                @endif
            </div>
        </form>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Judul Proyek</th>
                    <th>Tema Agent</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $p)
                    <tr>
                        <td>{{ $p->judul }}</td>
                        <td>{{ $p->tema_agent }}</td>
                        <td>
                            <a href="{{ route('project.show', $p->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('project.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            
                            @can('hapus-proyek')
                            <form action="{{ route('project.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus proyek ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                            @endcan

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada proyek yang didaftarkan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{ $projects->links() }}
    </x-info-card>
@endsection