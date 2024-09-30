<?php

namespace App\Http\Controllers\sampleapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToldzApiController extends Controller
{
    public function loveCalculator(Request $request)
	{
	    // Get the names from the request
	    $uyab1 = $request->namesauyab1;
	    $uyab2 = $request->namesauyab2;

	    // Concatenate the names
	    $combinedNames = $uyab1 . $uyab2;

	    // Generate a "love score" based on the names
	    // We'll use the length of the combined names and hash the result for randomness
	    $nameLength = strlen($combinedNames);
	    $hash = md5($combinedNames); // Hash the combined names
	    $numericHash = hexdec(substr($hash, 0, 8)); // Convert part of the hash to a numeric value

	    // Calculate the percentage (modulo with 100 to get a result between 0 and 100)
	    $lovePercentage = ($numericHash + $nameLength) % 100;

	    // Ensure the percentage is never 0 (just for fun, 1% minimum)
	    if ($lovePercentage == 0) {
	        $lovePercentage = rand(1, 5); // Randomly assign 1 to 5 if it's 0
	    }

	    // Return the result
	    return response()->json([
	        'uyab1' => $uyab1,
	        'uyab2' => $uyab2,
	        'love_percentage' => $lovePercentage . '%',
	        'message' => $this->getLoveMessage($lovePercentage),
	    ]);
	}

	// Optional: A helper function to return a message based on the love percentage
	private function getLoveMessage($percentage)
	{
	    if ($percentage > 80) {
	        return "A perfect match! 💖";
	    } elseif ($percentage > 50) {
	        return "There’s potential for love! 💞";
	    } elseif ($percentage > 30) {
	        return "You might need some work. 💔";
	    } else {
	        return "It’s a tough one... 😢";
	    }
	}

}
