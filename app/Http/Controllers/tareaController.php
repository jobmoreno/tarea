<?php

namespace App\Http\Controllers;

use App\tarea;
use Illuminate\Http\Request;

class tareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return view("tareas.tareaIndex");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tareas.formCreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect()->
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(tarea $tarea)
    {
        return view("tareas.show")->with(["tarea" =>$tarea]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarea $tarea)
    {
        //
    }
}
