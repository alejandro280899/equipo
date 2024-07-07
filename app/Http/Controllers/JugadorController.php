<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JugadorRequest;
use App\Models\Equipo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     */
    public function index(Request $request): View
    {
        $jugadors = Jugador::paginate();
        return view('jugador.index', compact('jugadors'))
        ->with('i', ($request->input('page', 1) - 1) * $jugadors->perPage());;
    }

    /**
     * Show the form for creating a new resource 
     */
    public function create(): View
    {
        $jugador = new Jugador();
        $equipos = Equipo::all();
        return view('jugador.create', compact('jugador','equipos'));
    }
     
    /**
     * Store a newly created resource in storage.
     */
    public function store(JugadorRequest $request): RedirectResponse
    {
        $jugador = Jugador::create($request->validated());
        $jugador->equipo()->associate($request->equipo_id);
        return Redirect::route('jugadors.index')
        ->with('success', 'Jugador created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
{
    $jugador = Jugador::find($id);
    return view('jugador.show', compact('jugador'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jugador = Jugador::find($id);
        return view('jugador.edit', compact('jugador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JugadorRequest $request, Jugador $jugador): RedirectResponse
{
    $jugador->update($request->validated());
    return Redirect::route('jugadors.index')
        ->with('success', 'Jugador actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Jugador::find($id)->delete();
        return Redirect::route('jugadors.index')
        ->with('success', 'Jugador deleted successfully.');
    }
}
