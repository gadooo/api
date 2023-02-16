<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return Item::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        return Item::create($request->only([
            'name',
            'details',
            'description',
            'price'
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param Item $item
     * @return Item
     */
    public function show(Item $item): Item
    {
        return $item;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Item $item
     * @return Item
     */
    public function update(Request $request, Item $item): Item
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
     * @param Item $item
     * @return string
     */
    public function destroy(Item $item): string
    {
        $item->delete();
        return'deleted done' ;
    }
}
