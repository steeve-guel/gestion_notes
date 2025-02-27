<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnseignantFilterRequest;
use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\Formation;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $enseignants = Enseignant::paginate(5);

        return view('admin.enseignant.enseignants',compact(
            'enseignants',
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $enseignant = new Enseignant();

        return view('admin.enseignant.createEnseignant', [
            'enseignant' => $enseignant,
            'formations' => Formation::select('id', 'grade')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnseignantFilterRequest $request)
    {
        //
        $enseignant = Enseignant::create($request->validated());
        // dd($request->all());
        $enseignant->formations()->sync($request->validated('formations'));
        return redirect()->route('enseignant.show', ['enseignant' => $enseignant->id])->with('success', "L'article a ete bien enregistre");
    }

    /**
     * Display the specified resource.
     */
    public function show(Enseignant $enseignant)
    {
        //
        return view('admin.enseignant.showEnseignant', ['enseignant' => $enseignant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enseignant $enseignant)
    {
        //

        //dd($enseignant->formations()->pluck('id'));

        return view('admin.enseignant.editEnseignant', [
            'enseignant' => $enseignant,
            'formations' => Formation::select('id', 'grade')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EnseignantFilterRequest $request, Enseignant $enseignant)
    {
        //
        $enseignant->update($request->validated());
        // dd($request->all());
        $enseignant->formations()->sync($request->validated('formations'));
        return redirect()->route('enseignant.show', ['enseignant' => $enseignant->id])->with('success', "L'article a ete bien enregistre");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enseignant $enseignant)
    {
        //
    }
}
