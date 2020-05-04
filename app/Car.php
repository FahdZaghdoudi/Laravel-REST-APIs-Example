<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['title', 'description', 'price', 'price',
     'seller-phone-number', 'location', 'release', 'mileage', 'number_of_doors',
      'number_of_seats', 'color', 'transsmission', 'fiscal_power', 'img1', 'img2',
       'img3', 'img4', 'img5', 'img6', 'img7', 'img8', 'img9', 'img10', 'fuel'];
}
