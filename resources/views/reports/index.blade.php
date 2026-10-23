@extends('layouts.main')

@section('title', 'Daftar Laporan Genangan - LaporBanjir Hub')

@section('content')

    <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
        <div>
            <h1 class="text-3xl font-black text-white tracking-tight">Monitoring Genangan Air</h1>
            <p class="text-slate-400 text-sm mt-1">Pantau kondisi titik genangan air secara akurat dan terintegrasi.</p>
        </div>
        <a href="{{ route('reports.create') }}" class="self-start md:self-auto px-5 py-3 rounded-2xl bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 text-white font-bold text-sm shadow-xl shadow-indigo-500/20 hover:shadow-indigo-500/30 transition-all active:scale-95 flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            Buat Laporan Baru
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($reports as $report)
            @include('partials.report-card', ['report' => $report])
        @empty
            <div class="col-span-full text-center py-16 bg-slate-900/40 rounded-3xl border border-dashed border-slate-800">
                <p class="text-slate-400 font-medium">Belum ada data laporan genangan air saat ini.</p>
            </div>
        @endforelse
    </div>

@endsection