<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\book;

class DashboardController extends Controller
{
    public function create()
    {
        return view('layouts.pages.home.adminlogin.create');
    }

    public function bookinglist()
    {
        $books = book::all();
        return view('layouts.pages.home.adminlogin.bookinglist',compact('books'));
    }

    public function destroy($id){
        $book = book::findorfail($id);
        $book->delete();
        return redirect('/bookinglist')->with ('success','Data Deleted');
    }
}
