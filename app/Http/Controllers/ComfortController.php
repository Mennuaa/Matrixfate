<?php

namespace App\Http\Controllers;

use App\Models\Comfort;
use Illuminate\Http\Request;

class ComfortController extends Controller
{
    public function getAll(){
        $matrixes = Comfort::all();
        $response = [
            "status" => true,
            "matrixes" => $matrixes
        ];
        return response($response, 200);
    }
}
