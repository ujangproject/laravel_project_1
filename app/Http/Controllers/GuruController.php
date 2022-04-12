<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Illuminate\Support\Facades\Redirect;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // Get Function 
    // Index
    public function index()
    {
        $guru= Guru::all();
        return view('guru.index',['guru'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     // GET Function
     // Create
    public function create()
    {
        return view('guru.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // POST Function
    // Create
    public function store(Request $request)
    {
        $guru= New guru();
        $guru->nama=$request->nama;
        $guru->alamat=$request->alamat;
        $guru->no_hp=$request->no_hp;
        $guru->save();

        return Redirect::to('guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // GET Function
    // Look Show Detail
    public function show($id)
    {
        $guru=Guru::find($id);
        return view('guru.detail',['guru'=>$guru]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // GET Function
    // Edit
    public function edit($id)
    {
        $guru=Guru::where('id_guru',$id)->first();
        return view('guru.edit',['guru'=>$guru]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // POST Function
    // Edit
    public function update(Request $request, $id)
    {
        $guru=Guru::find($id);
        $guru->nama=$request->nama;
        $guru->alamat=$request->alamat;
        $guru->no_hp=$request->no_hp;
        $guru->save();

        return Redirect::to('guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // POST Function
     // Delete 
    public function destroy($id)
    {
        //
    }
}
