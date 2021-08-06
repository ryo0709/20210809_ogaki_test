<?php

namespace App\Http\Controllers;

class buildingController extends Controller
{
    public function index()
    {
        return "建物です";
    }
    public function room($room)
    {
        return "部屋番号は" . $room . "です";
    }

}
