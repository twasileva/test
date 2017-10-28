<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$lists = \App\Lists::all();
    return view('welcome', ['lists' => $lists]);
});

Route::get('/submit', function(){
	return view('submit');
});

Route::post('/submit', function(Request $request) {
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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
