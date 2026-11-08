@extends('layouts.app')

@section('title', 'Secure Feedback Hub')

@section('content')
    <h2 class="mb-4">Secure Feedback Hub</h2>

    @if(session('success'))
        <x-status-banner tipe="success">
            <strong>Berhasil!</strong> {{ session('success') }}
        </x-status-banner>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('feedback.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa:</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email ITS:</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori Masukan:</label>
                    <select name="kategori" class="form-select @error('kategori') is-invalid @enderror">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Akademik" {{ old('kategori') == 'Akademik' ? 'selected' : '' }}>Akademik</option>
                        <option value="Sarana Prasarana" {{ old('kategori') == 'Sarana Prasarana' ? 'selected' : '' }}>Sarana Prasarana</option>
                        <option value="Kegiatan Mahasiswa" {{ old('kategori') == 'Kegiatan Mahasiswa' ? 'selected' : '' }}>Kegiatan Mahasiswa</option>
                    </select>
                    @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Isi Pesan:</label>
                    <textarea name="pesan" class="form-control @error('pesan') is-invalid @enderror" rows="5">{{ old('pesan') }}</textarea>
                    @error('pesan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Kirim Masukan</button>
            </form>
        </div>
    </div>
@endsection