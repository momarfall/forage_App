<?php

namespace App\Http\Controllers;

use App\Comptable;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ComptableController extends Controller
{
    public function list(Request $request)
    {
        $comptables=Comptable::get(); //pour la recuperation
        return Datatables::of($comptables)->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('comptables.index');
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
        return view('compteurs.create',compact('village'));
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
        return view('comptables.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compteur  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Comptable $comptable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comptable  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Comptable $comptable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comptable  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comptable $comptable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comptable  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comptable $comptable)
    {
        //
    }
}
