<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ForElseLoopController extends Controller{
    function ForElseLoopController(){
        $Data= array("Bangladesh", "India", "USA", "Canada", "Dubai", "Pakistan");
        return view('ForElseLoop', ['DataKey'=>$Data]);
    }
}
