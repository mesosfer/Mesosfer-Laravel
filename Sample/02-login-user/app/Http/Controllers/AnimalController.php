<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        return view('pages.animal.view');
    }
}