<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = Serie::all();
        


        return view('series.index')->with('series', $series);
        //return$series;
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // $nomeSerie = $request->input('nome');
        // $serie = new Serie();
        // $serie->nome = $nomeSerie;
        // $serie->save();
        Serie::create($request->all());
        return to_route('series.index');
        
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
    public function destroy(Request $request)
    {
        Serie::destroy($request->serie);
        return to_route('series.index');

    }
}
