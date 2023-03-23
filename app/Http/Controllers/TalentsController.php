<?php

namespace App\Http\Controllers;

use App\Models\Talents;
use Illuminate\Http\Request;

class TalentsController extends Controller
{
    public function getAll(){
        $matrixes = Talents::all();
        $response = [
            "status" => true,
            "matrixes" => $matrixes
        ];
        return response($response, 200);
    }
}
