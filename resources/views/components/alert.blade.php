<div class="mb-8 p-4 rounded-2xl bg-gradient-to-r from-emerald-500/10 via-teal-500/10 to-transparent border border-emerald-500/30 backdrop-blur-md flex items-center justify-between shadow-lg shadow-emerald-500/5 transition-all">
    <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-xl bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400 font-bold">
            ✓
        </div>
        <div>
            <p class="text-emerald-300 font-semibold text-sm">{{ $slot }}</p>
            <p class="text-emerald-500/80 text-xs mt-0.5">Sistem telah menyinkronkan data terbaru.</p>
        </div>
    </div>
    <span class="text-xs bg-emerald-500/20 text-emerald-300 font-bold px-3 py-1 rounded-full border border-emerald-500/30 uppercase tracking-wider">
        System Active
    </span>
</div>