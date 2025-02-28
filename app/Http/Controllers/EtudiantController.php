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
    public function index(Request $request)
    {
        //
        $etudiants = Etudiant::paginate(5);
        $formations = Formation::all();

        $formationId = $request->input('formation_id');

        if ($formationId) {
            $etudiants = Etudiant::where('formation_id', $formationId)
                ->paginate(5)
                ->appends(['formation_id' => $formationId]);
        }

        return view('admin.etudiant.etudiants', compact(
            'etudiants',
            'formations',
            'formationId'
        ));
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

        $formation = Formation::findOrFail($etudiant->formation_id);

        return view('admin.etudiant.showEtudiant', compact('etudiant','formation'));
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
        return redirect()->route('etudiant.show', ['etudiant' => $etudiant->id])->with('success', "L'etudiant a ete bien modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
