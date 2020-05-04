<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Book;
use Dingo\Api\Routing\Helpers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    use Helpers;

    public function index()
{
    $currentUser = JWTAuth::parseToken()->authenticate();
    return $currentUser
        ->carss()
        ->orderBy('title')
        ->get()
        ->toArray();
}
}
