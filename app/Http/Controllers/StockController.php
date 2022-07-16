<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['stocks']=Stock::all();
        return view('stock.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.create');
    }

    public function stock_list($table)
    {
        $result=DB::table($table)->get();
        return json_encode($result);
    }
    
    public function stock_detail($code,$table)
    {
        $result=DB::table($table)->where('code',$code)->first();
        return json_encode($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stock_type'=>'required',
            'stock'=>'required',
            'qty'=>'required',
        ]);

        $_stock=DB::table($request->stock_type)->where('code',$request->stock)->first();
        $stock=new Stock();
        $stock->code=$request->stock;
        $stock->stock=$request->qty;
        $stock->total_price=$_stock->price*$request->qty;
        $stock->type=$request->stock_type;
        $stock->source='ADD';
        $stock->status='ADDED';
        $stock->save();
        return redirect()->route('stock.index')->with('success','Success Add New Stock');

        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
