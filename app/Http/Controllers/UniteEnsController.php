<?php

namespace App\Http\Controllers;

use App\Http\Requests\UniteEnsFilterRequest;
use App\Models\Formation;
use App\Models\UniteEns;
use Illuminate\Http\Request;

class UniteEnsController extends Controller
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
        $unite_ens = new UniteEns();

        return view('admin.uniteEns.createUniteEns', [
            'unite_ens' => $unite_ens,
            'formations' => Formation::select('id', 'grade')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UniteEnsFilterRequest $request)
    {
        //
        $unite_ens = UniteEns::create($request->validated());
        return redirect()->route('unite_ens.show', ['unite_ens' => $unite_ens->id])->with('success', "Le niveau a ete bien créé.");
    }

    /**
     * Display the specified resource.
     */
    public function show(UniteEns $unite_ens)
    {
        //
        return view('admin.uniteEns.showUniteEns', ['unite_ens' => $unite_ens]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UniteEns $unite_ens)
    {
        //
        return view('admin.uniteEns.editUniteEns', ['unite_ens' => $unite_ens, 'formations' => Formation::select('id', 'grade')->get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UniteEnsFilterRequest $request, UniteEns $unite_ens)
    {
        //
        $unite_ens->update($request->validated());
        return redirect()->route('unite_ens.show', ['unite_ens' => $unite_ens->id])->with('success', "La formation a ete bien modifie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UniteEns $unite_ens)
    {
        //
    }
}
