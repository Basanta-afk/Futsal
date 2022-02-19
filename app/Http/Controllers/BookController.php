<?php

namespace App\Http\Controllers;
use App\book;
use App\futsal;
use Illuminate\Http\Request;
use Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $result)
    {
        // $books = book::all();
        // return view('layouts.pages.home.adminlogin.bookinglist',compact('books'));
       

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $book = new book();
       $book->futsal_id = $request->get('id');
       //$book->futsal_id =  Auth::user()->id;
        return view('layouts.pages.home.customer.book', compact('book'));
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book=new book();
        $book->name =  $request->get('name');
        $book->phone =  $request->get('phone');
        $book->date =  $request->get('date');
        $book->time =  $request->get('time');
        $book->futsal_id =  $request->get('futsal_id');
        $book->user_id =  Auth::user()->id;
        $book->save();
        if($book->time=='{{$book->time}}'  && $book->date=='{{$book->date}}')
        {
            return redirect('/book');
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $book = book
        //$book = book::all();
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
        
    }
}
