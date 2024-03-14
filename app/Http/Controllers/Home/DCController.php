<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DCController extends Controller
{
 public function index(){
    $comics = config("comics");
    return view('pages.home',compact("comics"));
 }

 public function charsFun(){
    return view('pages.games');
 }
}
