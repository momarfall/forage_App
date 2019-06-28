<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class FactureController extends Controller
{
    public function list(Request $request)
    {
        $facture=Facture::with('reglement.type')->get();
         //pour la recuperation
        return Datatables::of($facture)->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('factures.index');

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
        return view('factures.create',compact('village'));
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
        return view('factures.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Facture  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reglement  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facture  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facture  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        //
    }

   

}
