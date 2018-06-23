<?php

use App\User;
use \Auth as Auth;
use App\Location;
use App\Collection;

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
  
    return view('home');
})->name('home');

Route::get('/login', function(){
  return view('auth/login');
})->name('auth.login');

Route::get('/logout', function(){
  Auth::logout();
  return view('home');
})->name('auth.logout');

Route::post('/login', function(){
    
  $user = User::where('email', $_POST['email'])->where('password', $_POST['password'])->first();

  
  
  if(isset($user)){
    // dd($user);
    Auth::login($user);
    return redirect(route('home')); 
  }
  else
  {
    return redirect()
        ->back()
        ->withInput()
        ->with(['error' => 'Nepareizs e-pasts vai parole!']);
  }
});



Route::get('/contact', function(){
  $location = Location::find(1);
  return view('contact',['location'=>$location]);
})->name('contact');

Route::get('/collection', function(){
  $collections = Collection::all();
  return view ('collection',['collections'=>$collections]);
})->name('collection');

Route::get('/collection-new', function(){
  return view ('collection-new');
})->name('create.collection');

Route::post('/collection-new', function(){
  $collection = new Collection();
  $collection->izpilditajs = $_POST['izpilditajs'];
  $collection->nosaukums = $_POST['nosaukums'];
  $collection->daudzums = $_POST['daudzums'];
  $collection->cena = $_POST['cena'];
  $collection->save();
  
  if(isset($_FILES["picture"])) {
    $picture = $_FILES["picture"] ["tmp_name"];
    try{
    $name = $_SERVER['DOCUMENT_ROOT'] ."/galadarbs/public/img/collection-".$collection->id.".png";
      move_uploaded_file($picture, $name);
  }
  catch(\Exception $e){
     dd($e->getMessage());
  }
}

  return redirect(route('collection'));
})->name('store.collection');


Route::post('/edit-collection', function(){
  $collection = Collection::where('id', $_POST['id'])->first();
  $collection->daudzums = $_POST['daudzums'];
   $collection->save();
  return redirect(route("collection"));
})->name('edit.collection');

  




Route::get('/report', function(){
  return view ('report');
})->name('report');

Route::resource('tasks', 'VinylController');



