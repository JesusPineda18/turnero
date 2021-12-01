<?php

namespace App\Http\Controllers;

use App\Models\Catered;
use App\Models\Shift;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
    public function index ()
    {
        $attended = Catered::all()->first();
        if($attended === null){
            $next=null;
        }else{
            $next = Shift::where('id', '>', $attended->id)->orderBy('id', 'asc')->first();
        }
        
        
        return view('screens.index',compact('attended','next'));
    }
}
