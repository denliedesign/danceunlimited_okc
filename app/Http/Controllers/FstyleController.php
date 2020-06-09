<?php

namespace App\Http\Controllers;

use App\Fstyle;
use Illuminate\Http\Request;

class FstyleController extends Controller

{
//    public function __construct()
//    {
//        $this->calendar = Fstyle::all()->sortBy('day');
//        \View::share('calendar', $this->calendar);
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fstyles = Fstyle::all();
        return view('fstyles', compact('fstyles'));
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
        $fstyle = Fstyle::create($this->validateRequest());
        return redirect('/fall');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fstyle  $fstyle
     * @return \Illuminate\Http\Response
     */
    public function show(Fstyle $fstyle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fstyle  $fstyle
     * @return \Illuminate\Http\Response
     */
    public function edit(Fstyle $fstyle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fstyle  $fstyle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fstyle $fstyle)
    {
        $fstyle->update($this->validateRequest());
        return redirect('/fall');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fstyle  $fstyle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fstyle $fstyle)
    {
        $fstyle->delete();
        return redirect('/fall');
    }

    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'class' => 'required',
            'age' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);
    }
}
