@extends('layouts.app')

@section('title', 'Detail Proyek')

@section('content')
    <h2 class="mb-4">Detail Proyek: {{ $project->judul }}</h2>

    <x-info-card>
        <x-slot:header>Informasi Lengkap</x-slot:header>
        <table class="table table-striped">
            <tr>
                <th width="20%">Judul</th>
                <td>{{ $project->judul }}</td>
            </tr>
            <tr>
                <th>Tema Agent</th>
                <td>{{ $project->tema_agent }}</td>
            </tr>
            <tr>
                <th>API Key Secure</th>
                <td><code>{{ $project->api_key_secure }}</code></td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $project->deskripsi ?? 'Tidak ada deskripsi.' }}</td>
            </tr>
        </table>
        
        <div class="mt-3">
            <a href="{{ route('project.edit', $project->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('project.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </x-info-card>
@endsection