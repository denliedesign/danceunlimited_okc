<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller

{
    public function __construct()
    {
        $this->calendars = Calendar::all();
        \View::share('calendars', $this->calendars);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendars = Calendar::all();
        return view('calendars', compact('calendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Calendar $calendar)
    {
        $calendar = new Calendar();
        return view('calendars.create', compact('calendar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calendar = Calendar::create($this->validateRequest());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        $this->authorize('update', Calendar::class);
        return view('calendars.show', compact('calendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar)
    {
        $calendar->update($this->validateRequest());
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        $calendar->delete();
        return redirect('/');
    }

    private function validateRequest()
    {
        return request()->validate([
            'month' => 'required',
            'startday' => 'required',
            'endday' => 'nullable',
            'event' => 'required',

        ]);
    }
}
