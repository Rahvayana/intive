<?php

namespace App\Http\Controllers;

use App\Models\Raw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RawController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['raws']=Raw::all();
        return view('raw.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('raw.create');
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
            'name'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'unit'=>'required',
        ]);

        $curr_code=DB::table('raws')->max('code');
        DB::table('raws')->insert([
                'code' => $curr_code+=1,
                'name' => $request->name,
                'description' =>$request->description, 
                'unit' => $request->unit,
                'price' => $request->price,
        ]);

        return redirect()->route('raw.index')->with('success','Success Add New Raw Product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function show(Raw $raw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function edit(Raw $raw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raw $raw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raw  $raw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raw $raw)
    {
        //
    }
}
