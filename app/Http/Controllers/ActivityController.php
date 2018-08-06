<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\User;
use App\Mail\ActivityCreated;
use App\Mail\ActivityReminder;
use Mail;

class ActivityController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('index', Activity::class);
        return view('activity.index')->with([
            'activities' => Activity::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('index', Activity::class);
        return view('activity.create')->with([
            'users' => User::users()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('index', Activity::class);
        Mail::to([User::find($request->user_id)->email])->send(new ActivityCreated(Activity::create($request->all())));
        return redirect()->route('activity.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view', Activity::find($id));
        return view('activity.show')->with([
            'activity' => Activity::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('index', Activity::class);
        return view('activity.edit')->with([
            'activity' => Activity::find($id),
            'users' => User::users()->get()
        ]);
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
        $this->authorize('index', Activity::class);
        Activity::find($id)->update($request->all());
        return redirect()->route('activity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('index', Activity::class);
        Activity::destroy($id);
    }
    public function reminder($id)
    {
        $this->authorize('index', Activity::class);
        $activity = Activity::find($id);
        Mail::to([$activity->user->email])->send(new ActivityReminder($activity));
        return redirect()->back();
    }
}
