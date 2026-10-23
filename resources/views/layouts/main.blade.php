<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LaporBanjir Monitoring Hub')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Font Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col justify-between selection:bg-indigo-500 selection:text-white antialiased">

    <!-- Glowing Background Decor -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden -z-10">
        <div class="absolute -top-40 -left-40 w-96 h-96 bg-indigo-600/20 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -right-40 w-96 h-96 bg-blue-600/15 rounded-full blur-3xl"></div>
    </div>

    <!-- Header & Navigasi -->
    <header class="sticky top-0 z-50 backdrop-blur-xl bg-slate-900/80 border-b border-slate-800/80">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('reports.index') }}" class="flex items-center gap-2.5 group">
                <div class="p-2 rounded-xl bg-indigo-500/10 border border-indigo-500/30 text-indigo-400 group-hover:bg-indigo-500/20 transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <span class="text-xl font-extrabold bg-gradient-to-r from-indigo-300 via-blue-400 to-teal-300 bg-clip-text text-transparent">
                    LaporBanjir<span class="text-indigo-400">.hub</span>
                </span>
            </a>
            
            <nav class="flex gap-3">
                <a href="{{ route('reports.index') }}" class="px-4 py-2 rounded-xl bg-slate-800/60 hover:bg-slate-800 text-slate-300 hover:text-white border border-slate-700/60 transition-all text-sm font-semibold flex items-center gap-2">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    Daftar Laporan
                </a>
                <a href="{{ route('reports.create') }}" class="px-4 py-2 rounded-xl bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 text-white shadow-lg shadow-indigo-500/20 transition-all text-sm font-semibold flex items-center gap-2 active:scale-95">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Form Pelaporan
                </a>
            </nav>
        </div>
    </header>

    <!-- Area Konten Utama -->
    <main class="max-w-6xl mx-auto px-6 py-10 flex-grow w-full">
        @yield('content')
    </main>

</body>
</html>