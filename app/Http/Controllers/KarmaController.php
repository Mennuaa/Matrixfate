<?php

namespace App\Http\Controllers;

use App\Models\Karma;
use Illuminate\Http\Request;

class KarmaController extends Controller
{
    public function getAll(){
        $matrixes = Karma::all();
        $response = [
            "status" => true,
            "matrixes" => $matrixes
        ];
        return response($response, 200);
    }
}
