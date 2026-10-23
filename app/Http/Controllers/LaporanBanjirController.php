<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanBanjirController extends Controller
{
    public function index()
    {
        // Data default awal
        $defaultReports = [
            [
                'id' => 1,
                'reporter' => 'Asep Supriatna',
                'location' => 'Dayeuhkolot / Gedung TULT',
                'water_level' => 'Semata Kaki',
                'status' => 'Waspada',
                'time' => '10 menit yang lalu',
            ],
            [
                'id' => 2,
                'reporter' => 'Siti Aminah',
                'location' => 'Baleendah / Gerbang Utama',
                'water_level' => 'Sebetis',
                'status' => 'Bahaya',
                'time' => '25 menit yang lalu',
            ],
            [
                'id' => 3,
                'reporter' => 'Budi Pratama',
                'location' => 'Kantin Halal',
                'water_level' => 'Genangan Tipis',
                'status' => 'Aman',
                'time' => '1 jam yang lalu',
            ]
        ];

        // Ambil data laporan tambahan dari Session jika ada
        $sessionReports = session()->get('custom_reports', []);

        // Gabungkan data tambahan (posisi di atas) dengan data default
        $reports = array_merge($sessionReports, $defaultReports);

        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $reporter = $request->input('reporter', 'Anonim');
        $location = $request->input('location', 'Lokasi tidak diketahui');
        $water_level = $request->input('water_level', 'Semata Kaki');

        // Tentukan status berdasarkan ketinggian air
        $status = 'Aman';
        if (str_contains($water_level, 'Sebetis')) {
            $status = 'Waspada';
        } elseif (str_contains($water_level, 'Dada') || str_contains($water_level, 'Lutut')) {
            $status = 'Bahaya';
        }

        // Buat struktur data laporan baru
        $newReport = [
            'id' => time(),
            'reporter' => $reporter,
            'location' => $location,
            'water_level' => $water_level,
            'status' => $status,
            'time' => 'Baru saja',
        ];

        // Simpan laporan baru ke dalam Session
        $sessionReports = session()->get('custom_reports', []);
        array_unshift($sessionReports, $newReport);
        session()->put('custom_reports', $sessionReports);

        return view('reports.success', compact('reporter', 'location'));
    }
}