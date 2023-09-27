<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class HomeController extends Controller
{
    public function index(){

        $trains = Train::where('data_partenza', '>', now())
        ->orderBy('data_partenza', 'asc')
        ->get();

        return view("home", ["trains"=>$trains]);
    }
}
