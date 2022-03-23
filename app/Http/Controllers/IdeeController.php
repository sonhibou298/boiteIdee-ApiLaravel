<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use App\Http\Requests\StoreIdeeRequest;
use App\Http\Requests\UpdateIdeeRequest;
use Symfony\Component\Translation\IdentityTranslator;

class IdeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Idee::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIdeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdeeRequest $request)
    {
        if (Idee::create($request->all())){
            return response()->json([
                'success' => 'Idée crée avec Succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function show(Idee $idee)
    {
        return $idee;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function edit(Idee $idee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdeeRequest  $request
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdeeRequest $request, Idee $idee)
    {
        if (Idee::update($request->all())){
            return response()->json([
                'success' => 'Idée modifiei avec Succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idee  $idee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idee $idee)
    {
        $idee->delete();
    }
}
