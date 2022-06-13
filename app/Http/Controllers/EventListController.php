<?php

namespace App\Http\Controllers;

use App\Models\EventList;
use App\Http\Requests\StoreEventListRequest;
use App\Http\Requests\UpdateEventListRequest;

class EventListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreEventListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EventList  $eventList
     * @return \Illuminate\Http\Response
     */
    public function show(EventList $eventList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventList  $eventList
     * @return \Illuminate\Http\Response
     */
    public function edit(EventList $eventList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventListRequest  $request
     * @param  \App\Models\EventList  $eventList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventListRequest $request, EventList $eventList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventList  $eventList
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventList $eventList)
    {
        //
    }
}
