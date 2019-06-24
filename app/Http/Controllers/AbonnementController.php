<?php

namespace App\Http\Controllers;

use App\Abonnement ;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AbonnementController extends Controller
{
    public function list(Request $request)
    {
        $abonnements=Abonnement ::get(); //pour la recuperation
        return Datatables::of($abonnements )->make(true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('abonnements.index');
    }
   /*  public function list()
    {
        $abonnements=Abonnement ::with(['client.user','compteurs'])->get();
        return DataTable::of('$abonnements')->make(true);
    }
     */

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
        return view('abonnements.create',compact('village'));
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
        return view('abonnements.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abonnement   $client
     * @return \Illuminate\Http\Response
     */
    public function show(Abonnement $abonnement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abonnement   $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonnement $abonnement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abonnement   $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonnement $abonnement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abonnement   $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonnement $abonnement)
    {
        //
    }
}
