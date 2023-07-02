<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // from animal model select all
       return Animal::all();
    }

    public function testindex()
    {
        // from animal model select all
       return DB::select('select * from animals');
    }

    public function testme()
    {
        // from animal model select all
       return DB::table('animals')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the request body and validate it
        $request->validate([
            'type' => 'required',
            'gender' => 'required',
            'species' => 'required',
        ]);
        // from the aminal model insert into 
        return Animal::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // from the animal model where id = $id 
        return Animal::find($id);
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

        $animal = Animal::find($id);
        $animal->update($request->all());
        return $animal;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // from Animal model delete $id 
        return Animal::destroy($id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  type $type
     * @return \Illuminate\Http\Response
     */
    public function Search($type)
    {
        // from Animal model delete $id 
        return Animal::where('type','like','%'.$type.'%')->get();

    }
}
