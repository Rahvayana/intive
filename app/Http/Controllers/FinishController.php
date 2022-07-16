<?php

namespace App\Http\Controllers;

use App\Models\Finish;
use Illuminate\Http\Request;

class FinishController extends Controller
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
        $data['finishes']=Finish::all();
        return view('finish.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finish  $finish
     * @return \Illuminate\Http\Response
     */
    public function show(Finish $finish,$code)
    {
        $data['finish']=Finish::where('code',$code)->first();
        $data['finishes']=Finish::select('finishes.*','wips.name as wip_name','wips.price as wip_price')
        ->leftJoin('wips','wips.id','finishes.wip_id')
        ->where('finishes.code',$code)->get();
        // dd($data);
        return view('finish.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finish  $finish
     * @return \Illuminate\Http\Response
     */
    public function edit(Finish $finish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Finish  $finish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finish $finish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finish  $finish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finish $finish)
    {
        //
    }
}
