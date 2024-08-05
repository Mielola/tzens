<?php

namespace App\Http\Controllers;

use App\Models\organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $post = organisasi::findOrFail($id);
        return view('Page.detailOrganisasi', [
            'title' => 'Organisasi Detail',
            'post' => $post,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(organisasi $organisasi)
    {
        $organisasi = organisasi::all();
        return view('Page.organisasi', ['title' => 'Organisasi', 'post' => $organisasi]);
    }
}
