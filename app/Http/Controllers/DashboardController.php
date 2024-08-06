<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\organisasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $organisasi = organisasi::inRandomOrder()->limit(3)->get();
        $acara = Acara::inRandomOrder()->limit(3)->get();
        return view('Page.welcome', ['title' => 'Temukan Organisasi Impianmu', 'organ' => $organisasi, 'post' => $acara]);
    }
}
