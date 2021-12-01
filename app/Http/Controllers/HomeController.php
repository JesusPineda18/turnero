<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Professional;
use App\Models\Shift;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::all();
        $professionals = Professional::all();
        $shifts = Shift::all();
        return view('home', compact('customers','professionals','shifts'));
    }
}
