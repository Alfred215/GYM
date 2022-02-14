<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Activity;
use App\Models\Sesion;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
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

    public function filter(Request $request){
        $filter = $request->filter;
        $sessiones = Sesion::where('activity_id','LIKE',"%$filter%")->get();
        return $sessiones;
        //return view('bookings.ajax.filter',['sessiones'=>$sessiones]);
    }

    public function filter2(Request $request){
        $filter = $request->filter2;
        $sessions = Sesion::where('date_session','LIKE',"%$filter%")->get();
        return $sessions;
        //return view('bookings.ajax.filter',['sessiones'=>$sessiones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::all();
        return view("bookings.create", ["activities" => $activities]);
    }

    public function createDate(){
        $sessions = Sesion::all();
        return view("bookings.createdate",["sessions"=>$sessions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $session_id=$request->store;
        $user_id= Auth::id();
        $booking= Booking::create([
            'fecha'=>new Carbon(),
            'user_id'=>$user_id,
            'session_id'=>$session_id
        ]);
        return $session_id;
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
