<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function persons(){

    	$persons=["Ali","Vali","Pirvali","Lazim"];
    	return view('vurgetsin.persons',compact('persons'));

    }

    public function about()
    {
    	return view('about');

    }
}
