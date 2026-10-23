<div class="group relative bg-slate-900/60 backdrop-blur-xl border border-slate-800 hover:border-indigo-500/50 rounded-3xl p-6 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-indigo-500/10 flex flex-col justify-between overflow-hidden">
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 via-blue-500 to-teal-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>

    <div>
        <div class="flex justify-between items-start mb-5">
            <div>
                <h4 class="text-xs font-semibold text-slate-400">Pelapor</h4>
                <p class="text-sm font-bold text-slate-200 group-hover:text-indigo-300 transition-colors">{{ $report['reporter'] }}</p>
            </div>

            @if(str_contains($report['status'], 'Bahaya'))
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-rose-500/10 text-rose-400 border border-rose-500/30">
                    <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span>
                    {{ $report['status'] }}
                </span>
            @elseif(str_contains($report['status'], 'Waspada'))
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/30">
                    <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                    {{ $report['status'] }}
                </span>
            @else
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/30">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    {{ $report['status'] }}
                </span>
            @endif
        </div>

        <h3 class="text-lg font-bold text-white group-hover:text-indigo-200 transition-colors mb-1 flex items-center gap-2">
            <svg class="w-5 h-5 text-indigo-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            {{ $report['location'] }}
        </h3>

        <div class="mt-4 p-3 rounded-2xl bg-slate-950/60 border border-slate-800/80 flex justify-between items-center text-xs">
            <span class="text-slate-400 font-medium">Tinggi Air:</span>
            <span class="font-bold text-indigo-300 bg-indigo-500/10 px-2.5 py-1 rounded-lg border border-indigo-500/20">
                {{ $report['water_level'] }}
            </span>
        </div>
    </div>

    <div class="mt-6 pt-4 border-t border-slate-800/80 flex justify-between items-center text-xs text-slate-500">
        <span class="flex items-center gap-1.5">
            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            {{ $report['time'] }}
        </span>
        <button class="text-indigo-400 font-semibold group-hover:translate-x-1 transition-transform flex items-center gap-1">
            Detail <span>&rarr;</span>
        </button>
    </div>
</div>