<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursFilterRequest;
use App\Models\Cours;
use App\Models\UniteEns;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cours = new Cours();

        return view('admin.cours.createCours', [
            'cours' => $cours,
            'unites' => UniteEns::select('id', 'intitule')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoursFilterRequest $request)
    {
        //

        $cours = Cours::create([
            'code' => $request->code,
            'intitule' => $request->intitule
        ]);

        $cours->unite_ens()->attach($request->unite_ens_id, [
            'coeff' => $request->coeff,
            'coursMagistral' => $request->coursMagistral,
            'tDiriges' => $request->tDiriges,
            'tPratiques' => $request->tPratiques,
            'tPersEtudiant' => $request->tPersEtudiant,
            'volmHoraireTPers' => $request->volmHoraireTPers,
        ]);

        return redirect()->route('cours.show', ['cours' => $cours->id])->with('success', "Le cours a ete bien créé.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Cours $cours)
    {
        //
        return view('admin.cours.showCours', ['cours' => $cours]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cours $cours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cours $cours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cours $cours)
    {
        //
    }
}
