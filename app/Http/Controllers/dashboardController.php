<?php

namespace App\Http\Controllers;

use App\Models\dataBerita;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBerita = dataBerita::all();
        return view('welcome', compact('dataBerita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulBerita' => 'required',
            'gambarBerita' => 'image|mimes:jpeg,png,jpg|max:2048',
            'isiBerita' => 'required',
            'author' => 'required',
            'tanggalTerbit' => 'required|date',
        ]);

        dataBerita::create($request->all());
        return redirect('/')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
