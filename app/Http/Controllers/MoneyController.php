<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    public function getAll(){
        $matrixes = Money::all();
        $response = [
            "status" => true,
            "matrixes" => $matrixes
        ];
        return response($response, 200);
    }
}
