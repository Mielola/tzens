<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index($slug)
    {
        $acara = Acara::where('slug', $slug)->firstOrFail();
        return view('Page.webinar', ['title' => 'Acara Page', 'acara' => $acara]);
    }

    public function show()
    {
        $acara = Acara::all();
        return view('Page.webinar', ['title' => 'Acara Page', 'acara' => $acara]);
    }
}
