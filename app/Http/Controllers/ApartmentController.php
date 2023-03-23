<?php

namespace App\Http\Controllers;

use App\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartment = Apartment::find(3, 'country');
        dump($apartment);
        dump($apartment->country);
        dump($apartment->city);
        dump($apartment->area);
        dump($apartment->price);
        dump($apartment->address);
    }
}
