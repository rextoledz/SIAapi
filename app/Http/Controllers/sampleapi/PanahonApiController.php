<?php

namespace App\Http\Controllers\sampleapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanahonApiController extends Controller
{
    public function getPanahon(Request $request)
    {
    	return $request->lugar;
    }
}
