<?php

namespace App\Http\Controllers;

use App\Administrateur;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AdministrateurController extends Controller
{
    public function list(Request $request)
    {
        $administrateurs=Administrateur::get(); //pour la recuperation
        return Datatables::of($administrateurs)->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('administrateurs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // $this->validate(
        //     $request, [
        //         'village' => 'required|exists:villages,id',
        //     ]);
        $village_id=$request->input('village');
        $village=\App\Village::find($village_id);
        return view('administrateurs.create',compact('village'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(
            $request, [
                'id' => 'required|int|max:50',
                //'uuid' => 'required|char|max:50',
                'matricule' => 'required|varchar|max:50',
               // 'email' => 'required|email|max:255|unique:users,email',
                //'password' => 'required|string|max:50',
                //'village' => 'required|exists:villages,id',
            ]
        );
        return view('administrateur.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrateur  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Administrateur $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrateur  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrateur  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aministrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrateur  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrateur $administrateur)
    {
        //
    }
}
