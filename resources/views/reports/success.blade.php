@extends('layouts.main')

@section('title', 'Laporan Terkirim - LaporBanjir Hub')

@section('content')

<div class="max-w-xl mx-auto">
    {{-- Menggunakan Komponen Alert --}}
    <x-alert>
        Laporan genangan air berhasil diverifikasi dan disimpan!
    </x-alert>

    <div class="bg-slate-900/80 backdrop-blur-2xl border border-slate-800 rounded-3xl p-8 shadow-2xl text-center">
        <div class="w-16 h-16 bg-indigo-500/10 border border-indigo-500/30 rounded-2xl flex items-center justify-center text-3xl mx-auto mb-4 text-indigo-400">
            📍
        </div>
        <h2 class="text-2xl font-black text-white mb-2">Terima Kasih, {{ $reporter }}!</h2>
        <p class="text-sm text-slate-400 leading-relaxed mb-8">
            Laporan untuk lokasi <span class="text-indigo-300 font-bold px-2 py-1 rounded-lg bg-indigo-500/10 border border-indigo-500/20">{{ $location }}</span> telah diterima oleh pusat kontrol.
        </p>

        <a href="{{ route('reports.index') }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-2xl bg-indigo-600 hover:bg-indigo-500 text-white font-bold text-sm shadow-lg shadow-indigo-500/20 transition-all active:scale-95">
            Kembali ke Dashboard Laporan ➔
        </a>
    </div>
</div>

@endsection