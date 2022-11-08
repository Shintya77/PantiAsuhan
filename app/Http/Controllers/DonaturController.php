<?php

namespace App\Http\Controllers;

use App\Models\donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donatur = donatur::all();
        $title = 'Data Donatur';
        $paginate = donatur::orderBy('id_donatur', 'asc')->paginate(5);
        return view('admin.donasi.donatur.indexDonatur', compact('donatur','title','paginate'));
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
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function show(donatur $donatur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function edit(donatur $donatur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donatur $donatur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donatur  $donatur
     * @return \Illuminate\Http\Response
     */
    public function destroy(donatur $donatur)
    {
        //
    }
}
