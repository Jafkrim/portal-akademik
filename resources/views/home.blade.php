@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1 class="mb-4">Selamat Datang di Portal ITS!</h1>
    
    <x-info-card>
        <x-slot:header>Profil Singkat Mahasiswa</x-slot:header>
        <p class="mb-1"><strong>Nama Lengkap:</strong> Ja'far Balyan Al Karim</p>
        <p class="mb-0"><strong>NRP:</strong> 5025241040</p>
    </x-info-card>

    <div class="d-flex gap-2">
        <a href="{{ route('profil.detail', ['nrp' => '5025241040']) }}" class="btn btn-outline-primary">Lihat Detail Profil</a>
        <a href="{{ route('project.idea', ['tema' => 'Email Manager']) }}" class="btn btn-outline-success">Ide Proyek AI</a>
        <a href="{{ route('feedback.form') }}" class="btn btn-outline-warning">Kirim Feedback</a>
    </div>
@endsection