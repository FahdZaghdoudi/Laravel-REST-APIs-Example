<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\Http\Resources\Car as CarResource;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /// Get cars
        $cars = Car::paginate();

        // Return collection of articles as a resource
        return CarResource::collection($cars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = $request->isMethod('put') ? 
        Car::findOrFail($request->id) : new Car;

        $car->id = $request->input('id');
        $car->title = $request->input('title');
        $car->description = $request->input('description');
        $car->price = $request->input('price');
        $car->seller_phone_number = $request->input('seller_phone_number');
        $car->location = $request->input('location');
        $car->release = $request->input('release');
        $car->mileage = $request->input('mileage');
        $car->number_of_doors = $request->input('number_of_doors');
        $car->number_of_seats = $request->input('number_of_seats');
        $car->color = $request->input('color');
        $car->transsmission = $request->input('transsmission');
        $car->fiscal_power = $request->input('fiscal_power');
        $car->number_of_cylinders = $request->input('number_of_cylinders');
        $car->img1 = $request->input('img1');
        $car->img2 = $request->input('img2');
        $car->img3 = $request->input('img3');
        $car->img4 = $request->input('img4');
        $car->img5 = $request->input('img5');
        $car->img6 = $request->input('img6');
        $car->img7 = $request->input('img7');
        $car->img8 = $request->input('img8');
        $car->img9 = $request->input('img9');
        $car->img10 = $request->input('img10');
        $car->fuel = $request->input('fuel');


   

        if($car->save()) 
        {
            return new CarResource($car);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get car
        $car = Car::findOrFail($id);

        // Return single car as a resource
        return new CarResource($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        if($car->delete()) {
            return new CarResource($car);
        }   
    }
}
