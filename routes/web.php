<?php

use Illuminate\Support\Facades\Route;
use practicals\Song;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/veggies/baigan', function () {
    return 'Baigan';
});*/

/* Route::get('/veggies/{veggieName}', function (string $veggiename) {
        return $veggiename;
});*/

Route::get('/veggies/{veggiename}', function (string $veggiename) {
    return $veggiename;
})->whereIn('veggiename', ['baigan', 'gobhi', 'aaloo','bhindi']);

/*Route::get('/veggies/{veggiename}', function (string $veggiename) {
    return view('veggies');
})->whereIn('veggiename', ['baigan', 'gobhi', 'aaloo','bhindi']);*/
Route::get('/songs', function () {
    $song1 = new Song("Song Title", "Artist Name", "Pop", 120);
    $song1->setTitle("Stan");
    $song1->setArtist("Eminem");
  
    $song2 = new Song("Song Title", "Artist Name", "Pop", 120);
    $song2->setTitle("Nothing Else Matters");
    $song2->setArtist("Metallica");
  
    $song3 = new Song("Song Title", "Artist Name", "Pop", 120);
    $song3->setTitle("With You");
    $song3->setArtist("A P Dhillon");
  
    return view('songs', [ 'songs' => [ $song1, $song2, $song3 ] ]); 
  });