<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function submit(){

    	$validator = Validator::make($request->all(), [
        'title' => 'required|max:255',
        'img' => 'required|max:255',
        'description' => 'required|max:255',
   	 ]);
    	if ($validator->fails()) {
        	return back()
	            ->withInput()
	            ->withErrors($validator);
		    }
		    $lists = new \App\Lists;
		    $lists->title = $request->title;
		    $lists->img = $request->img;
		    $lists->description = $request->description;
		    $lists->save();
		    return redirect('/');

    	return view('submit', ['data_for_view' => $list_array]);
    }

    public function show(){

    	$lists = \App\Lists::all();
		return view('welcome' compact('lists'));
    
    }
}
