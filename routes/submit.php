<?
use Illuminate\Http\Request;



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
?>