<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Professional;

class TurnController extends Controller
{
    public function index ()
    {
        return view('turn.index');
    }

    public function input ()
    {
        return view('turn.input');
    }

    public function store (Request $request)
    {
        
        $verify = Customer::where("identification",'=', $request->input('identification'))->get();
        $shift = new Shift ();
        $shift->customer_id = $verify[0]->id;
        $shift->professional_id = $request->input('professional');

        $shift->save();

        $professional = Professional::find($request->input('professional'));


        return view ('turn.ticket',compact('professional','shift'));
        
    }
}
