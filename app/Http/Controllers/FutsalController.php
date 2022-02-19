<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\futsal;
use Illuminate\Support\Facades\Input;

class FutsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $futsals = futsal::all();
        return view('layouts.pages.home.index',compact('futsals'));

      //  $futsals = futsal::all();
       // return view('layouts.pages.home.customer.book',compact('futsals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pages.home.adminlogin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $futsal=new futsal();

        $futsal->futsalname =  $request->get('futsalname');

        if(Input::hasfile('image'))
        {
            $file = Input::file('image');
            // dd($file);
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/futsal/',$filename);
            $futsal->image = $filename;
        }
        else
        {
            // return $request;
            $futsal -> image ='';
        }
        $futsal->save();
        
            return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function show(futsal $futsal)
    {
        $futsals = futsal::all();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function edit(futsal $futsal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, futsal $futsal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
       // dd($request);
        if(Auth::attempt($request->except('_token'))){
            dd('successful');
        }
        else
        dd('unsuccessful');
    }
}
