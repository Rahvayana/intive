<?php

namespace App\Http\Controllers;

use App\Models\Wip;
use Illuminate\Http\Request;

class WipController extends Controller
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
        $data['wips']=Wip::groupBy('code')->get();
        // dd($data);
        return view('wip.index',$data);
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
     * @param  \App\Models\Wip  $wip
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $data['wip']=Wip::where('code',$code)->first();
        $data['wips']=Wip::select('wips.*','raws.name as raw_name','raws.price as raw_price')
        ->leftJoin('raws','raws.id','wips.raw_id')
        ->where('wips.code',$code)->get();
        // dd($data);
        return view('wip.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wip  $wip
     * @return \Illuminate\Http\Response
     */
    public function edit(Wip $wip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wip  $wip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wip $wip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wip  $wip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wip $wip)
    {
        //
    }
}
