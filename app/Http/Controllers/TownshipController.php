<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Township;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $townships=Township::paginate(8);
        return view('backend.townships.index',compact('townships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $township=new Township;
        $township->name=$request->name;
        $township->save();

        //redirect 

        return redirect()->route('townships.index');

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
        $township = Township::find($id);
        return view('backend.townships.edit',compact('township'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
        
        'name' => 'required',
        
        ]);

        //Update Data
          $township=Township::find($id);
          $township->name=$request->name;
         
          $township->save();


        //Redirect
          return redirect()->route('townships.index');
        // $township=Township::find($request->townshipid);
        // $township->name=$request->name;
        // $township->save();
        // // return back();

        //  // dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $township=Township::find($id);
        $township->delete();
        return redirect()->route('townships.index');
    }
}
