<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingsController extends Controller
{
    public function weddings()
    {
        return view('weddings');
    }
}
