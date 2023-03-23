<?php

namespace App\Http\Controllers;

use App\Models\MatrixText;
use Illuminate\Http\Request;

class MatrixTextController extends Controller
{
    public function getAll(){
        $matrixes = MatrixText::all();
        $response = [
            "status" => true,
            "matrixes" => $matrixes
        ];
        return response($response, 200);
    }
}
