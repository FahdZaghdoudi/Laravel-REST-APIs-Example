<?php

namespace App\Http\Controllers;

use App\User;
use App\Car;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function filter(Request $request, Car $car)
    {
    $car = $car->newQuery();

    // Search for a car based on their title.
    if ($request->has('title')) 
    {
        //return $car->where('title', $request->input('title'))->get();
        $car->where('title', $request->input('title'));
    }

    // Search for a car based on their price.
    if ($request->has('price')) 
    {
        //return $car->where('price', $request->input('price'))->get();
        $car->where('price', $request->input('price'));
    }

    // Search for a car based on their location.
    if ($request->has('location')) 
    {
        //return $user->where('location', $request->input('location'))->get();
        $car->where('location', $request->input('location'));
    }

    // Search for a car based on their release.
    if ($request->has('release')) 
    {
        //return $user->where('release', $request->input('release'))->get();
        $car->where('release', $request->input('release'));
    }

    // Search for a car based on their transmission.
    if ($request->has('transsmission')) 
    {
        //return $user->where('transsmission', $request->input('transsmission'))->get();
        $car->where('transsmission', $request->input('transsmission'));
    }

    // Search for a car based on their fiscal power.
    if ($request->has('fiscal_power')) 
    {
        //return $user->where('fiscal_power', $request->input('fiscal_power'))->get();
        $car->where('fiscal_power', $request->input('fiscal_power'));
    }

    // Search for a car based on their fuel.
    if ($request->has('fuel')) 
    {
        //return $user->where('fuel', $request->input('fuel'))->get();
        $car->where('fuel', $request->input('fuel'));
    }


    //Get the results and return them
    return $car->get();

    //return CarSearch::apply($request);
    }
}
