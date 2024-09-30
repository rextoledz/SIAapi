<?php

namespace App\Http\Controllers\threec;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OracleCard;

class OracleController extends Controller
{
    /**
     * Show all oracle cards.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all oracle cards
        $cards = OracleCard::all();
        return view('oracle.index', compact('cards'));
    }

    /**
     * Draw a random oracle card (fortune).
     *
     * @return \Illuminate\Http\Response
     */
    public function draw()
    {
        // Get a random oracle card
        $card = OracleCard::inRandomOrder()->first();
        return view('oracle.draw', compact('card'));
    }

    /**
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find a card by its ID
        $card = OracleCard::findOrFail($id);
        return view('oracle.show', compact('card'));
    }
}
