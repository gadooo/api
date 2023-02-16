<?php

namespace App\Http\Controllers;

use App\Http\Resources\catogeryResource;
use App\Models\Catogery;
use Illuminate\Http\Request;

class catogeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Catogery::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return catogeryResource
     */
    public function store(Request $request)
    {
        $catogery=Catogery::create($request->only([
            'name',
            'code'
        ]));
        return new catogeryResource($catogery);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catogery  $catogery
     * @return catogeryResource
     */
    public function show(Catogery $catogery)
    {
        return new catogeryResource($catogery) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catogery  $catogery
     * @return catogeryResource
     */
    public function update(Request $request, Catogery $catogery)
    {
        $catogery->update($request->only([
            'name','code'
        ]));
        return new catogeryResource($catogery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catogery  $catogery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catogery $catogery)
    {
        $catogery->delete();
    }
}
