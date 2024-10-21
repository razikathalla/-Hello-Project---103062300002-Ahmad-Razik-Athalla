// File: app/Http/Controllers/SedimentController.php

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SedimentController extends Controller
{
    // File: app/Http/Controllers/SedimentController.php

public function calculateDeposition(Request $request)
{
    $result = null;

    if ($request->isMethod('post')) {
        $request->validate([
            'D' => 'required|numeric',
            'A' => 'required|numeric',
        ]);

        // Mengambil nilai dari formulir
        $D = $request->input('D'); // g/s/m³
        $A = $request->input('A'); // m²

        // Rumus akumulasi sedimen dalam 1 bulan (Q)
        $t = 30 * 24 * 60 * 60; // detik
        $Q = $D * $A * $t;

        $result = number_format($Q, 3) . ' kg';
    }

    return view('index', ['result' => $result ?? null]);
}

}
