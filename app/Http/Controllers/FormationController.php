<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationFilterRequest;
use App\Models\Cours;
use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Formation;
use App\Models\UniteEns;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $formations = Formation::paginate(5);
        $etudiants = Etudiant::paginate(5);
        $enseignants = Enseignant::paginate(5);
        $unite_ens = UniteEns::paginate(5);
        $cours = Cours::paginate(5);


        return view('admin.dashboardAdmin',compact(
            'formations','etudiants',
            'enseignants','unite_ens',
            'cours'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $formation = new Formation();
        $formation->code = 'FN111111';
        $formation->domaine = 'Sciences et technologies';
        $formation->mention = 'Informatique';
        $formation->description = "L'une des meilleurs formations informatiques";
        $formation->grade = "MASTER SYSTEMES D'INFORMATION (SI)";

        return view('admin.createFormation',[
            'formation' => $formation
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormationFilterRequest $request)
    {
        //
        $formation = Formation::create($request->Validated());
        return redirect()->route('formation.show',['formation'=> $formation->id])->with('success',"La formation a ete bien créée.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Formation $formation):View|RedirectResponse
    {
        //
        return view('pub.showFormation',['formation'=>$formation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formation $formation)
    {
        //
        return view('admin.editFormation',['formation'=>$formation]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormationFilterRequest $request, Formation $formation)
    {
        //
        $formation->update($request->validated());
        return redirect()->route('formation.show',['formation'=> $formation->id])->with('success',"La formation a ete bien modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formation $formation)
    {
        //
    }
}
