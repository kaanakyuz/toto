<?php

namespace App\Http\Controllers;
use App\Models\Coupon;
use App\Models\EventList;
use Illuminate\Http\Request;
use App\Http\Traits\TestTrait;

class CouponController extends Controller
{
    use TestTrait;

    public function index(Request  $request)
    {
        $user = $request->user_id ;
        $kolonlar = $request->except(['user_id' , 'price']);
        $system_colon = $this->createSystemCoupon($kolonlar); // Here we use the getTestExample trait
        $play_coupon = $this->createPlayCoupon(json_decode($system_colon));
        $coupon_price = $this->CouponPrice(json_decode($play_coupon));

        $kolon = json_encode($kolonlar);

        Coupon::create([
            'user_id' => $user,
            'price' => $coupon_price ,
            'main_coupon' => $kolon ,
            'week_id' => 3 ,
            'system_coupon' => $system_colon ,
            'play_coupon' => $play_coupon,
            'toto_price' => $coupon_price ,
            'date' =>  now()
        ]);

      return response()->json($kolonlar);

      }
    public function getCoupon (Request $request): \Illuminate\Http\JsonResponse
    {
        $kupon = Coupon::firstWhere('id', $request->id);
        return response()->json(json_decode($kupon->main_coupon));
    }
    public function myCoupon () {
        $kupon = Coupon::firstWhere('id', 1);
        $hafta = EventList::query()->where('week_id',3)->get();
        return view('welcome', compact(['kupon' , 'hafta']));
    }

}

