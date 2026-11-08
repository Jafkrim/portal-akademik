@extends('adminlte::page')

@section('title', 'Dashboard Admin')

@section('content_header')
    <h1>Dashboard Administrator</h1>
@endsection

@section('content')
    <p>Selamat datang di panel kontrol eksklusif Admin.</p>

    <div class="row">
        <!-- Widget 1 -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalProyek }}</h3>
                    <p>Total Ide Proyek</p>
                </div>
                <div class="icon"><i class="fas fa-project-diagram"></i></div>
            </div>
        </div>
        
        <!-- Widget 2 -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalMahasiswa }}</h3>
                    <p>Total Mahasiswa Aktif</p>
                </div>
                <div class="icon"><i class="fas fa-users"></i></div>
            </div>
        </div>

        <!-- Widget 3 -->
        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalAdmin }}</h3>
                    <p>Administrator Sistem</p>
                </div>
                <div class="icon"><i class="fas fa-user-shield"></i></div>
            </div>
        </div>
    </div>
    <a href="{{ route('project.index') }}" class="btn btn-primary mt-3">Kembali ke Tabel Proyek</a>
@endsection