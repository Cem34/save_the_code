<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FactureController extends Controller
{
    public function show($n){
    	return view('facture')->with('numero',$n);
    }
}
