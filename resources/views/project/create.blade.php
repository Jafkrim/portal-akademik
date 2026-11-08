@extends('layouts.app')

@section('title', 'Tambah Proyek Baru')

@section('content')
    <h2 class="mb-4">Tambah Proyek Baru</h2>

    <x-info-card>
        <x-slot:header>Formulir Pendaftaran Proyek</x-slot:header>
        <form action="{{ route('project.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Judul Proyek</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}">
                @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tema Agent</label>
                <select name="tema_agent" class="form-select @error('tema_agent') is-invalid @enderror">
                    <option value="">-- Pilih Tema --</option>
                    <option value="Ollama" {{ old('tema_agent') == 'Ollama' ? 'selected' : '' }}>Ollama</option>
                    <option value="Security Scanner" {{ old('tema_agent') == 'Security Scanner' ? 'selected' : '' }}>Security Scanner</option>
                    <option value="Network Port Analyzer" {{ old('tema_agent') == 'Network Port Analyzer' ? 'selected' : '' }}>Network Port Analyzer</option>
                </select>
                @error('tema_agent') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">API Key Secure</label>
                <input type="text" name="api_key_secure" class="form-control @error('api_key_secure') is-invalid @enderror" value="{{ old('api_key_secure') }}">
                @error('api_key_secure') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="4">{{ old('deskripsi') }}</textarea>
                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan Proyek</button>
            <a href="{{ route('project.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </x-info-card>
@endsection