<?php

namespace App\Http\Controllers;

use App\Sstyle;
use Illuminate\Http\Request;

class SstyleController extends Controller

{
//    public function __construct()
//    {
//        $this->calendar = Sstyle::all()->sortBy('day');
//        \View::share('calendar', $this->calendar);
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sstyles = Sstyle::all();
        return view('sstyles', compact('sstyles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sstyle $sstyle)
    {
        $sstyle = new Sstyle();
        return view('sstyles.create', compact('sstyle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sstyle = Sstyle::create($this->validateRequest());
        return redirect('/summer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sstyle  $sstyle
     * @return \Illuminate\Http\Response
     */
    public function show(Sstyle $sstyle)
    {
        $this->authorize('update', Sstyle::class);
        return view('sstyles.show', compact('sstyle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sstyle  $sstyle
     * @return \Illuminate\Http\Response
     */
    public function edit(Sstyle $sstyle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sstyle  $sstyle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sstyle $sstyle)
    {
        $sstyle->update($this->validateRequest());
        return redirect('/summer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sstyle  $sstyle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sstyle $sstyle)
    {
        $sstyle->delete();
        return redirect('/summer');
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
