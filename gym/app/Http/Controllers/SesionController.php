<?php

namespace App\Http\Controllers;

use App\Models\Sesion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Activity;

class SesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Sesion::all();
        return view('sessions.index',['sessions'=>$sessions]);
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
        //$dt = Carbon::now();
        // $date->monthName;
        // var_dump($date->month);
        // var_dump($date->daysInMonth);
        $dias = $request['dias'];
        $mes = $request['mes'];
        $date= Carbon::createFromDate(2022,$mes,01,'Europe/Madrid');

        for ($j = 0; $j < $date->daysInMonth; $j++) {
            $date=$date->add($j,'day');
            if($date->isSameMonth($date)){
                for ($i = 0; $i < Str::length($dias); $i++) {
                    switch ($dias[$i]) {
                        case 'L':
                            if($date->isMonday()){
                                $sesion= Sesion::create([
                                    'date_session'=>$date,
                                    'start_time'=>$request['start_time'],
                                    'end_time'=>$request['end_time'],
                                    'activity_id'=>$request['activity_id']
                                ]);
                            }
                            break;
                        case 'M':
                            if($date->isTuesday()){
                                $sesion= Sesion::create([
                                    'date_session'=>$date,
                                    'start_time'=>$request['start_time'],
                                    'end_time'=>$request['end_time'],
                                    'activity_id'=>$request['activity_id']
                                ]);
                            }
                            break;
                        case 'X':
                            if($date->isWednesday()){
                                $sesion= Sesion::create([
                                    'date_session'=>$date,
                                    'start_time'=>$request['start_time'],
                                    'end_time'=>$request['end_time'],
                                    'activity_id'=>$request['activity_id']
                                ]);
                            }
                            break;
                        case 'J':
                            if($date->isThursday()){
                                $sesion= Sesion::create([
                                    'date_session'=>$date,
                                    'start_time'=>$request['start_time'],
                                    'end_time'=>$request['end_time'],
                                    'activity_id'=>$request['activity_id']
                                ]);
                            }
                            break;
                        case 'V':
                            if($date->isFriday()){
                                $sesion= Sesion::create([
                                    'date_session'=>$date,
                                    'start_time'=>$request['start_time'],
                                    'end_time'=>$request['end_time'],
                                    'activity_id'=>$request['activity_id']
                                ]);
                            }
                            break;
                    }
                } 
            }
        }

        return redirect('/sessions');
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
