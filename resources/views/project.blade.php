@extends('layouts.app')

@section('title', 'Ide Platform Agentic AI')

@section('content')
    <x-info-card>
        <x-slot:header>Rencana Proyek Akhir</x-slot:header>
        <p>Tema Terpilih: <strong>{{ $tema }}</strong></p>
        <p>Email Manager adalah agentic AI yang mengotomatisasi pengelolaan, prioritas, dan balasan surel masuk secara cerdas untuk menghemat waktu koordinasi harian.</p>
    </x-info-card>
@endsection