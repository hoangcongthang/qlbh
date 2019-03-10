<?php

namespace App\Http\Controllers;

use App\Sanpham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
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
     * @param  \App\Sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function show(Sanpham $sanpham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function edit(Sanpham $sanpham)
    {   
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sanpham $sanpham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sanpham $sanpham)
    {
        //
    }
    public function ShowBakey(Request $request)
    {
        // cach 1
        $sanphams = DB::table('sanphams')->where('madanhmuc','45')->paginate(6);
        return view("bakery",compact('sanphams'));
        // cach 2

        // $sanphams = Sanpham::all();
         // $sanphams = json_encode($sanphams);
        // return view("bakery",compact('sanphams'));
    }
    public function ShowSweets(Request $request)
    {
        // cach 1
        $sanphams = DB::table('sanphams')->where('madanhmuc','46')->paginate(6);
        return view("sweet",compact('sanphams'));
        // cach 2

        // $sanphams = Sanpham::all();
         // $sanphams = json_encode($sanphams);
        // return view("bakery",compact('sanphams'));
    }
}
