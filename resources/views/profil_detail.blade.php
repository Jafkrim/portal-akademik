@extends('layouts.app')

@section('title', 'Detail Profil Mahasiswa')

@section('content')
    <h2 class="mb-4">Informasi Profil</h2>

    <x-info-card>
        <x-slot:header>Detail Mahasiswa</x-slot:header>
        <p class="mb-1"><strong>Nama Lengkap:</strong> {{ $nama }}</p>
        <p class="mb-0"><strong>NRP:</strong> {{ $nrp }}</p>
    </x-info-card>

    <a href="{{ route('home') }}" class="btn btn-secondary">Kembali ke Beranda</a>
@endsection