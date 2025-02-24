<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtudiantFilterRequest;
use App\Models\Etudiant;
use App\Models\Formation;
use Illuminate\Http\Request;

class EtudiantController extends Controller
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
        $etudiant = new Etudiant();

        return view('admin.etudiant.createEtudiant', [
            'etudiant' => $etudiant,
            'formations' => Formation::select('id', 'grade')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtudiantFilterRequest $request)
    {
        //
        $etudiant = Etudiant::create($request->validated());
        return redirect()->route('etudiant.show', ['etudiant' => $etudiant->id])->with('success', "L'etudiant a ete bien créé.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        //
        return view('admin.etudiant.showEtudiant', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        //
        return view('admin.etudiant.editEtudiant', [
            'etudiant' => $etudiant,
            'formations' => Formation::select('id', 'grade')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtudiantFilterRequest $request, Etudiant $etudiant)
    {
        //
        $etudiant->update($request->validated());
        return redirect()->route('unite_ens.show', ['etudiant' => $etudiant->id])->with('success', "L'etudiant a ete bien modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
