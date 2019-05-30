<?php
use Illuminate\Support\Facades\Input;
use App\Article;
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


Route::get('/','CreatesController@home');
Route::get('/create',function()
{
	return view('create');
});
Route::post('/insert','CreatesController@add');
Route::get('/update/{id}','CreatesController@update');
Route::post('/edit/{id}','CreatesController@edit');
Route::get('/read/{id}','CreatesController@read');
Route::get('/delete/{id}','CreatesController@delete');

Route::post('/search',function()
{
	$search = Input::get('search');
	//dd($search);
	if($search != '')
	{
		$articles = Article::where('title', 'LIKE', '%' . $search . '%')
		->orWhere('description', 'LIKE', '%' . $search . '%')
		->get();

		if(count($articles) > 0 )
			return view('header')->withDetails($articles)->withQuery($articles);
	}
	return view('header')->withMessege("No data found");
}
);

