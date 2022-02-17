<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Activity;

class SesionController extends Controller
{
    public function __construct()
    {
        $this->middleware('role');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activities = Activity::all();
        return view('sessions.create',['activities'=>$activities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'dias' => 'required',
            'mes' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'activity_id' => 'required',
        ];

        $request->validate($rules);

        $dias = $request['dias'];
        $mes = $request['mes'];
        $date= Carbon::createFromDate(2022,$mes,01,'Europe/Madrid');

        for ($j = 1; $j <= $date->daysInMonth; $j++) {
            $dateModifi= Carbon::createFromDate(2022,$mes,$j,'Europe/Madrid');
            if($dateModifi->isSameMonth($date)){
                for ($i = 0; $i < Str::length($dias); $i++) {
                    switch ($dias[$i]) {
                        case 'L':
                            if($dateModifi->isMonday()){
                                $this->up($request,$dateModifi);
                            }
                            break;
                        case 'M':
                            if($dateModifi->isTuesday()){
                                $this->up($request,$dateModifi);
                            }
                            break;
                        case 'X':
                            if($dateModifi->isWednesday()){
                                $this->up($request,$dateModifi);
                            }
                            break;
                        case 'J':
                            if($dateModifi->isThursday()){
                                $this->up($request,$dateModifi);
                            }
                            break;
                        case 'V':
                            if($dateModifi->isFriday()){
                                $this->up($request,$dateModifi);
                            }
                            break;
                    }
                } 
            }
        }

        return redirect('/sessions');
    }

    public function up (Request $request, $dateModifi){
        $sesion= Sesion::create([
            'date_session'=>$dateModifi,
            'start_time'=>$request['start_time'],
            'end_time'=>$request['end_time'],
            'activity_id'=>$request['activity_id']
        ]);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sesion $session)
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
