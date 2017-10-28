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

    	return view('submit', ['data_for_view' => $list_array]);

    public function show(){

    	$lists = \App\Lists::all();
		return view('welcome' compact('lists'));
    }
    }
}
