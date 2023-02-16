<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Item1;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Item1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return Item1::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $items = Item1::create($request->all());
        return $items;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Item1
     */
    public function show(Item1 $item)
    {
        return $item;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Item1
     */
    public function update(Request $request, Item1 $item): Item1
    {
        $item->update($request->only([  'name',
            'details',
            'description',
            'price']));
        return $item ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Item1 $item): Response
    {
        $item->delete();
        return response('item is deleted ');
    }
}
