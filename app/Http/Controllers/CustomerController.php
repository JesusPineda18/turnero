<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Professional;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer ();

        $customer->identification = $request->input("identificationTurn");
        $customer->name = $request->input("nameTurn");
        $customer->surname = $request->input("surnameTurn");
        $customer->second_surname = $request->input("secondSurnameTurn");
        $customer->email = $request->input("emailTurn");

        $customer->save();

        return redirect()->route('turn.input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view ('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrfail($id);
        $customer->name = $request->input("name");
        $customer->surname = $request->input("surname");
        $customer->second_surname = $request->input("secondSurname");
        $customer->identification = $request->input("identification");

        $customer->save();

        return redirect()->route('shifts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customers.index');
    }

    public function verifyCustomer (Request  $request)
    {
        $identificationSearch = $request->input("identificationTurn");

        $verify = Customer::where("identification",'=', $identificationSearch)->get();

        if (!$verify->isEmpty()){
            return view("turn.professionals", compact("verify"));
        }else{
            return redirect()->route("customers.create");
        }

    }
}
