<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware('role')->except('public','show');
        $this->middleware('auth')->except('index','create','store','edit','update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();

        return view('activities.index', ['activities' => $activities]);
    }

    public function public()
    {
        $activities = Activity::all();

        return view('activities.public', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
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
            'name' => 'required',
            'descrip' => 'required',
            'duration' => 'required',
            'nummembers' => 'required',
        ];

        $request->validate($rules);

        return redirect("/activities");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('activities.show', ['activity' => $activity]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Activity $activity)
    {   
        $rules = [
            'name' => 'required',
            'descrip' => 'required',
            'duration' => 'required',
            'nummembers' => 'required',
        ];

        $request->validate($rules);

        return view('activities.edit', ['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //No funciona
        $activities = Activity::find($activity->id);
        //$activity->fill($request->all());
        // $activities->name=$request["name"];
        // $activities->descrip=$request["descrip"];
        // $activities->duration=$request["duration"];
        // $activities->nummenbers=$request["nummembers"];
        $activities->save();
        return redirect('/activities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
        // DB::lastInsertId;
        // $object  = Object::create($request->all());
        // $object->id;
    }
}
