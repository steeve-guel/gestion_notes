<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormationFilterRequest;
use App\Models\Formation;
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
        $formations = Formation::paginate(1);

        return view('admin.dashboardAdmin',compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $formation = new Formation();

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
