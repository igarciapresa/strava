<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trial;

class TrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Trial::where('user_id', auth()->id())->get();

        /* if($request->ajax()){
            return Trial::where('user_id', auth()->id())->get();
        }else{
            return view('home');
        } */
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
        $trial = new Trial();
        $trial->name = $request->name;
        $trial->distance = $request->distance;
        $trial->user_id = auth()->id();
        $trial->save();

        return $trial;
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
        $trial = Trial::find($id);
        $trial->name = $request->name;
        $trial->distance = $request->distance;
        $trial->save();
        return $trial;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trial = Trial::find($id);
        $trial->delete();
    }
}
