<?php
namespace App\Http\Traits ;

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


trait LoginTrait {

    public  function smsCreate (string $data)
    {

        $code = random_int(0000,9999) ;// sms yazılımı sms kodunu atacak örn : 2245
        return [
            'phone' => $data,
            'generated_code' => $code  // Bu kodu mobil hafızaya alıyor.. Müşteri entered ile gönderiyor..
        ];

    }

}


?>
