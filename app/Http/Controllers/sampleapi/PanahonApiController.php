<?php

namespace App\Http\Controllers\sampleapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanahonApiController extends Controller
{
    public function getPanahon(Request $request)
    {
    	if ($request->lugar == "southernleyte") {
    		return "May katamtamang pag ulan ng nyebe";	
    	}
    }
}
