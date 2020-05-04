<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'seller_phone_number' => $this->seller_phone_number,
            'location' => $this->location,
            'release' => $this->release,
            'mileage' => $this->mileage,
            'number_of_doors' => $this->number_of_doors,
            'number_of_seats' => $this->number_of_seats,
            'color' => $this->color,
            'transsmission' => $this->transsmission,
            'fiscal_power' => $this->fiscal_power,
            'number_of_cylinders' => $this->number_of_cylinders,
            'img1' => $this->img1,
            'img2' => $this->img2,
            'img3' => $this->img3,
            'img4' => $this->img4,
            'img5' => $this->img5,
            'img6' => $this->img6,
            'img7' => $this->img7,
            'img8' => $this->img8,
            'img9' => $this->img9,
            'img10' => $this->img10,
            'fuel' => $this->fuel
        ];
    }

    /*public function with($request)
    {
         
    }*/
}
