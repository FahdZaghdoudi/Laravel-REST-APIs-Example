<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

/*use App\User;
use App\Car;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Car as CarResource;*/

class SearchbarController extends Controller
{
    public function index()
    {
        /*$s = $request->input('s');
        $list = Car::latest()
        ->search($s)
        ->paginate(20);
        return view ('search_bar', compact('title', 's'));*/
        return view ('search_bar');
    }


    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('cars')
        ->where('title', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '<li><a href="#">'.$row->title.'</a></li>';
      }
      $output .= '</ul>';
      echo $output;
     }
     
    }

}
