<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Desk;
use App\Http\Resources\DeskResource;
use App\Http\Requests\DeskRequest;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeskResource::collection(Desk::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeskRequest $request)
    {
        $request->validated();

        $desk = Desk::create([
            'name' => $request->name
        ]);
        return $desk;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Desk $desk)
    {
        return new DeskResource($desk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeskRequest $request, Desk $desk)
    {
        $request->validated();
        $desk->update([
            'name' => $request->name
        ]);

        return $desk;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        return $desk->delete();
    }
}
