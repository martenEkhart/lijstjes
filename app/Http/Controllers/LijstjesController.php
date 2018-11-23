<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lijst;

class LijstjesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
            $lijst = Lijst::all();
    
            return view('about')->with('lijstjes', $lijst);
  
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
        
        // $lijst vewijst naar Http/Lijst.php
         // Create New Message
         $lijst = new Lijst;

         $lijst->user_id = auth()->user()->id;
         $lijst->name = $request->input('name');
         $lijst->message = $request->input('message');
         // Save Message
         $lijst->save();

         // Redirect
         return redirect('/')->with('succes', 'Message Sent');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $lijst = Lijst::find($id);
         // Check for correct user
         if(auth()->user()->id !==$lijst->user_id){
            return redirect('about')->with('error', 'Unauthorized Page');
        }

        $lijst->delete();
        return redirect('/')->with('succes', 'lijstje Removed');
    }
}
