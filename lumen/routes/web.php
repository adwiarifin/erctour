<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Models\Tour;
use App\Models\Car;

$app->get('/', function () use ($app) {
    // get all variable
    $tours = Tour::orderBy('id', 'desc')->get();
    $tags = Tour::tags();
    $cars = Car::inRandomOrder()->limit(4)->get();

    // view
    return view('layout', array(
        'tags' => $tags,
        'tours' => $tours,
        'cars' => $cars
    ));
});

$app->get('/tour/{slug}', function($slug) use($app){
    $tour = Tour::where('slug', '=', $slug)->first();
    $other = Tour::where('slug', '<>', $slug)->inRandomOrder()->limit(4)->get();
    $title = $tour->title . ' - ERC Tour - Spesialis Paket Wisata Malang, Batu, Bromo';
    $page = 'tourdetail';
    return view('alternative', compact('tour', 'other', 'title', 'page'));
});

$app->get('/rentcar', function() use($app){
    $cars = Car::all();

    return view('alternative', array(
        'page' => 'rentcar',
        'cars' => $cars
    ));
});
