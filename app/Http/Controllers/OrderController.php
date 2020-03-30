<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Kuusi;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    public function orderwithid($id){
        dd($id);
        return view('orders.orderwithid');
        //return '<h1>Hello world</h1>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postalcode' => 'required',          
        ]);

        //create order
        $order = new Order;
        $order->firstname = $request->input('firstname');
        $order->lastname = $request->input('lastname');
        $order->address = $request->input('address');
        $order->email = $request->input('email');
        $order->phonenumber = $request->input('phonenumber');
        $order->postalcode = $request->input('postalcode');
        $order->city = $request->input('city');
        $order->description = $request->input('description');
        $order->kuusi_id = $request->input('kuusi_id');
        $order->price =$request->input('price');
        
        $order->save();


        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Haetaan kannasta Kuusi id:llä
        //return 'tämä oli: '.$id;
        $kuusi = Kuusi::find($id);
        return view('orders.orderwithid')->with('kuusi', $kuusi);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
