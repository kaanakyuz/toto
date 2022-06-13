<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Faker\Core\Number;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator;

class LoginController extends Controller
{

    function  index (Request $request)
        {
            $request->validate([
                'phone' => 'required|digits:10'
            ]);
            $code = random_int(0000,9999) ;// sms yazılımı sms kodunu atacak örn : 2245
            return [
                'phone' => $request['phone'],
                'generated_code' => $code  // Bu kodu mobil hafızaya alıyor.. Müşteri entered ile gönderiyor..
            ];
        }
        function smsControl (Request $request)
        {

         if ($request['generated_code'] !== $request['entered_code']) {
              //  throw new CustomException('Hatalı kod!');
            return response()->json('Hatalı Kod');
            }
          $user = User::firstWhere('phone', $request->phone);
           if($user) {
            $authToken = $user->createToken('auth-token')->plainTextToken;
            $data = [
                'access_token' => $authToken ,
                'token_type' => 'bearer' ,
                'user' => $user->name
            ];
         return response()->json($data);
        } else {
            User::create(["phone" => $request->phone ]);
            $user = User::firstWhere('phone', $request->phone);
                 $authToken = $user->createToken('auth-token')->plainTextToken;
                 $data = [
                     'access_token' => $authToken ,
                     'token_type' => 'bearer'
                 ];
              return response()->json($data);

        }
    }
}
