<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Salle;
use App\Models\User;
use Database\Seeders\SalleSeeder;
use Illuminate\Support\Facades\Session;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $Salles= Salle::all();
        return  view('dashboard',  compact("Salles"));


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Salle::create([
            'name' => $request->name,
            'level'=>$request->level,

        ]);

        $Salles = new Salle();
  $Salles->name = $request->input("name");
  $Salles->age = $request->input("level");
  $Salles->user_id = $Salles->id;
  $Salles->save();

 $Users = new User();
 $Users->Salles_id = $Salles->id;
 $Users->$Users = $request->input("$Users");
 $Users->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
