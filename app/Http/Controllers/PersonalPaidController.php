<?php

namespace App\Http\Controllers;

use App\Models\PersonalPaid;
use Illuminate\Http\Request;

class PersonalPaidController extends Controller
{
    public function getAll(){
        $matrixes = PersonalPaid::all();
        $response = [
            "status" => true,
            "matrixes" => $matrixes
        ];
        return response($response, 200);
    }
}
