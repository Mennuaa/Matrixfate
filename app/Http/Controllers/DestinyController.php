<?php

namespace App\Http\Controllers;

use App\Models\Destiny;
use Illuminate\Http\Request;

class DestinyController extends Controller
{
    public function getAll(){
        $matrixes = Destiny::all();
        $response = [
            "status" => true,
            "matrixes" => $matrixes
        ];
        return response($response, 200);
    }
}
