<?php

namespace App\Http\Controllers;

use App\Models\organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug)
    {
        $post = organisasi::where('slug', $slug)->firstOrFail();
        return view('Page.detailOrganisasi', [
            'title' => 'Organisasi Detail',
            'post' => $post,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Mencari organisasi berdasarkan nama atau deskripsi yang cocok dengan query
        $results = Organisasi::where('nama_organisasi', 'LIKE', "%{$query}%")
            ->orWhere('deskripsi', 'LIKE', "%{$query}%")
            ->get();

        return view('Page.search-results', compact('results', 'query'));
    }

    /**
     * Display the specified resource.
     */
    public function show(organisasi $organisasi)
    {
        $organisasi = organisasi::all();
        return view('Page.organisasi', ['title' => 'Temukan Organisasi Impianmu', 'post' => $organisasi]);
    }
}
