<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        //$contacts = Contact::all()->paginate();
        return view('pages.home'/*, compact('contacts')*/);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function courses()
    {
        return view('pages.courses');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
