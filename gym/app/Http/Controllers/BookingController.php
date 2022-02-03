<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Activity;
use App\Models\User;
use Carbon\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view("bookings.index", ["bookings" => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        if($request["name"]==1){
            $activities = Activity::all();
            return view("bookings.create", ["activities" => $activities]);
        }else{
            $activities = Activity::all();
            return view("bookings.createdos", ["activities" => $activities]);
        }
        
    }

    public function mostrar(Request $request)
    {
        echo "hola";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $activity_id = $request["activity_id"];
        $session_date = $request["session_id"];
        $activities = Activity::all();

        foreach ($activities as $activity) {
            if ($activity->id == $activity_id) {
                foreach ($activity->sessions as $session) {
                    if ($session->date_session == $session_date) {
                        $booking = Booking::create([
                            'fecha' => Carbon::now(),
                            'user_id' => $request["id_user"],
                            'session_id' => $session->id
                        ]);
                    }
                }
            }
        }

        // return redirect("/bookings");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
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
