<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function calculate(Request $request)
    {
        $tugas = $request->input('tugas');
        $ujian = $request->input('ujian');

        $totalNilai = ($tugas * 0.6) + ($ujian * 0.4);

        $grade = '';

        if ($totalNilai >= 81 && $totalNilai <= 100) {
            $grade = 'A';
        } elseif ($totalNilai >= 71 && $totalNilai <= 80) {
            $grade = 'B';
        } elseif ($totalNilai >= 61 && $totalNilai <= 70) {
            $grade = 'C';
        } elseif ($totalNilai >= 51 && $totalNilai <= 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        return view('welcome', ['grade' => $grade, 'totalNilai' => $totalNilai]);
    }
}
