<?php

namespace App\Http\Controllers;

use App\Consumer;
use Illuminate\Http\Request;

class ConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cons = Consumer::all();
        return view('consumer.index')->with('data', $cons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumer.create');
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
            'name' => 'required',
        ]);

        Consumer::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function show(Consumer $consumer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumer $consumer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumer $consumer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consumer  $consumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumer $consumer)
    {
        //
    }
}
