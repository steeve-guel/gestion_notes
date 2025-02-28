<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteFilterRequest;
use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $formations = Formation::all();
        $etudiants = collect();
        $notes = collect();

        $formationId = request()->input('formation_id');
        $etudiantId = request()->input('etudiant_id');

        if($formationId){
            $etudiants = Etudiant::where('formation_id', $formationId)->get();
            if($etudiantId){
                 $notes = Etudiant::find($etudiantId)->notes()->paginate(5);
            }

        }

        return view('pub.notes.notes',compact('notes' ,'etudiants', 'formations','formationId','etudiantId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $note = new Note();

        $cours = collect();
        $enseignants = collect();
        $etudiants = collect();
        $formations = Formation::all();

        $formationId = request()->input('formation_id');
        $enseignantId = request()->input('enseignant_id');
        if ($formationId) {
            $etudiants = Etudiant::where('formation_id', $formationId)->get();
            $enseignants = Formation::find($formationId)->enseignants;
            if ($enseignantId) {
                $cours = Enseignant::find($enseignantId)->cours;
                $note->enseignant_id = $enseignantId;
                $note->formation_id = $formationId;
            }
        }





        return view('pub.notes.createNote', compact(
            'note',
            'cours',
            'enseignants',
            'etudiants',
            'formations',
            'formationId',
            'enseignantId'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteFilterRequest $request)
    {
        //
        $note = Note::create($request->validated());
        return redirect()->route('note.show', ['note' => $note->id])->with('success', "La note a ete ajoute avec succes.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
        return view('pub.notes.showNote', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
