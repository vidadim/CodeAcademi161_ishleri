<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomController extends Controller
{

	public function add()
    {
    	return view('imageUpload');
    	return view('yukle');
    }


    public function store(Request $request)
    {
        
        $destination = base_path().'/public/uploads';
        $filename = $request->file('file')->getClientOriginalName();

        $request->file('file')->move($destination,

        $filename);
        return back();  

    } 


}
