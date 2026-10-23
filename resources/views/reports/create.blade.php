@extends('layouts.main')

@section('title', 'Form Pelaporan Genangan - LaporBanjir Hub')

@section('content')

<div class="max-w-xl mx-auto bg-slate-900/80 backdrop-blur-2xl border border-slate-800 rounded-3xl p-8 shadow-2xl shadow-indigo-500/5">
    <div class="mb-6">
        <h2 class="text-2xl font-black text-white">Form Pelaporan Genangan 📝</h2>
        <p class="text-sm text-slate-400 mt-1">Laporkan kondisi genangan air di sekitar lingkungan kamu secara tepat.</p>
    </div>

    <form action="{{ route('reports.store') }}" method="POST" class="space-y-5">
        @csrf
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Nama Pelapor</label>
            <input type="text" name="reporter" required placeholder="Contoh: Asep Supriatna" class="w-full px-4 py-3.5 rounded-2xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all font-medium text-sm">
        </div>

        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Lokasi Genangan</label>
            <input type="text" name="location" required placeholder="Contoh: Depan Gedung TULT Lt. 1" class="w-full px-4 py-3.5 rounded-2xl bg-slate-950/80 border border-slate-800 text-white placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all font-medium text-sm">
        </div>

        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Estimasi Ketinggian Air</label>
            <select name="water_level" class="w-full px-4 py-3.5 rounded-2xl bg-slate-950/80 border border-slate-800 text-slate-200 focus:outline-none focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 transition-all font-medium text-sm">
                <option value="Semata Kaki">Semata Kaki (Status: Aman)</option>
                <option value="Sebetis">Sebetis (Status: Waspada)</option>
                <option value="Selutut / Dada">Selutut / Dada (Status: Bahaya)</option>
            </select>
        </div>

        <button type="submit" class="w-full py-4 mt-2 rounded-2xl bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 text-white font-bold text-sm shadow-xl shadow-indigo-500/25 active:scale-98 transition-all">
            Kirim Laporan Genangan ✨
        </button>
    </form>
</div>

@endsection