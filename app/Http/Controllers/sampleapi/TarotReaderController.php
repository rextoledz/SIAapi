<?php

namespace App\Http\Controllers\sampleapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarotReaderController extends Controller
{
  	use Illuminate\Http\Request;

	public function tarot(Request $request, $nameofperson)
	{
	    // Tarot cards or messages
	    $tarotCards = [
	        'The Fool' => 'New beginnings, optimism, trust in life',
	        'The Magician' => 'Action, the power to manifest',
	        'The High Priestess' => 'Inaction, going within, the subconscious',
	        'The Empress' => 'Abundance, nurturing, fertility, life in bloom!',
	        'The Emperor' => 'Structure, stability, rules and power',
	        'The Hierophant' => 'Institutions, tradition, society and its rules',
	        'The Lovers' => 'Sexuality, passion, choice, uniting',
	        'The Chariot' => 'Movement, progress, integration',
	        'Strength' => 'Courage, subtle power, integration of animal self',
	        'The Hermit' => 'Meditation, solitude, consciousness',
	        'Wheel of Fortune' => 'Cycles, change, ups and downs',
	        'Justice' => 'Fairness, equality, balance',
	        'The Hanged Man' => 'Surrender, new perspective, enlightenment',
	        'Death' => 'The end of something, change, the impermeability of all things',
	        'Temperance' => 'Balance, moderation, being sensible',
	        'The Devil' => 'Destructive patterns, addiction, giving away your power',
	        'The Tower' => 'Collapse of stable structures, release, sudden insight',
	        'The Star' => 'Hope, calm, a good omen!',
	        'The Moon' => 'Mystery, the subconscious, dreams',
	        'The Sun' => 'Success, happiness, all will be well',
	        'Judgement' => 'Rebirth, a new phase, inner calling',
	        'The World' => 'Completion, wholeness, attainment, celebration of life'
	    ];

	    // Pick a random tarot card
	    $randomCard = array_rand($tarotCards);
	    $meaning = $tarotCards[$randomCard];

	    // Return the name and tarot card reading as a response
	    return response()->json([
	        'person' => $nameofperson,
	        'card' => $randomCard,
	        'meaning' => $meaning
	    ]);
	}

}
