<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

use CreateReservationsTable;
use DateTime;
use Illuminate\Support\Facades\Session;

class RservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Reservations = Reservation::latest()->get();

        // On transmet les Post à la vue "/resources/views/posts/index.blade.php"
        return view("admin", compact("Reservations"));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }
    public function __construct()
    {
        $ldate = new DateTime('today');
        $ldate = new DateTime('now');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|string|max:255',
            'start_date' => 'bail|required|date',
            'end_date' => 'bail|required|date',
            'start_time' => 'bail|required',
            'end_time' => 'bail|required',
            'salle'=>'bail|required',

        ]);


        // 3. On enregistre les informations du Post
        Reservation::create([
            'name' => $request->name,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'salle'=>$request->salle,

        ]);

        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect('enregistrement')->with(['votre reunion a bien été enregistrer']);

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

    $Reservations = Reservation::find('$id');

    $Reservations->delete();

    return view("admin");

    }
}
