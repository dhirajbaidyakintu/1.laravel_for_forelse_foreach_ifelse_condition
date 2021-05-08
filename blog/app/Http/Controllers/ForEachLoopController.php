<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ForEachLoopController extends Controller{
    function ForEachLoopController(){
        $Data= array("Bangladesh", "India", "USA", "Canada", "Dubai", "Pakistan");
        return view('ForEachLoop', ['DataKey'=>$Data]);
    }
}
