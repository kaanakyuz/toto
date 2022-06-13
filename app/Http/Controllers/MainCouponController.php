<?php

namespace App\Http\Controllers;

use App\Models\MainCoupon;
use App\Http\Requests\StoreMainCouponRequest;
use App\Http\Requests\UpdateMainCouponRequest;

class MainCouponController extends Controller
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
     * @param  \App\Http\Requests\StoreMainCouponRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMainCouponRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainCoupon  $mainCoupon
     * @return \Illuminate\Http\Response
     */
    public function show(MainCoupon $mainCoupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainCoupon  $mainCoupon
     * @return \Illuminate\Http\Response
     */
    public function edit(MainCoupon $mainCoupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMainCouponRequest  $request
     * @param  \App\Models\MainCoupon  $mainCoupon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMainCouponRequest $request, MainCoupon $mainCoupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainCoupon  $mainCoupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainCoupon $mainCoupon)
    {
        //
    }
}
