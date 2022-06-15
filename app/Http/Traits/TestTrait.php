<?php
namespace  App\Http\Traits;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use PhpParser\Builder\Class_;

trait TestTrait {

    public function createSystemCoupon(array $data)
    {
        // sistem kolonlarını oluştur...
        $f_1 = array('f','s','s','s','s','f','f','s','f','f','f','f','s','s','f','s');
        $f_2 = array('s','f','s','s','f','s','f','f','s','f','f','s','f','s','f','s');
        $f_3 = array('f','f','s','f','s','s','s','f','f','s','f','s','s','f','f','s');
        $f_4 = array('s','s','f','f','s','s','f','f','f','s','s','f','f','s','f','s');
        $f_5 = array('f','s','f','s','f','s','s','f','s','f','s','f','s','f','f','s');
        $f_6 = array('s','f','f','s','s','f','s','s','f','f','s','s','f','f','f','s');
        $f_7 = array('s','s','s','f','f','f','s','s','s','s','f','f','f','f','f','s');

        $tumkolon = [];
        $mb = [];
        $fsayi = 0 ;
        // 16 adet sistem kuponu yatay oluşuyor...
        for ($v=0; $v < 15 ; $v++) {
            $k = $v+1;
            $col1 = "r".$k."_1" ;
            $col2 = "r".$k."_2" ;
            $col3 = "r".$k."_3" ;
            if($data[$v]['formul']==1) {
                $favori = $data[$v][$col1] ;
                $supriz = $data[$v][$col2] . $data[$v][$col3];
                $fsayi = $fsayi +1 ;
            } else{
                $favori = $data[$v][$col1] . $data[$v][$col2] . $data[$v][$col3];
            }
            for ($b=0; $b < 16 ; $b++) { // 1 maç için 16 sonuçç döneek
                if($data[$v]['formul']==1) {
                    if(${"f_".$fsayi}[$b]=='f'){ $mb[$b]=$favori ;} else { $mb[$b]=$supriz;}
                } else { $mb[$b] = $favori ;}
            }
            $tumkolon[$v] = $mb ; // 16 adet formüllü kupon oluşturuldu....

        }
        return  json_encode($tumkolon);

    }


    public function createPlayCoupon(array $data)
    {

        $kolonlar = [];

        for ($m=0; $m < 16 ; $m++){  //  Oynanacak kuponlar burada... nesine gibi
            foreach ($data as $keys => $kup) {
                $kolonlar[$m][$keys] = $kup[$m];
            }
        }

        return json_encode($kolonlar);

    }
    public  function  CouponPrice (array $data) {
        // nesine oynanacak kupon bedeli
        $fiyat = 0.5 ;
        $toplam_fiyat = 0 ;

        foreach ($data as $item) {

            foreach ($item as $items) {
                if(strlen($items) ==2 ) {
                    $fiyat = $fiyat * 2;
                }
                if(strlen($items) ==3 ) {
                    $fiyat = $fiyat * 3;
                }
            }

            $toplam_fiyat = $fiyat + $toplam_fiyat;
            $fiyat = 0.5;

        }
        return json_encode($toplam_fiyat);


    }

    public  function  CouponFirstPrice (array $data) {
         // Gerçekte oynansa tutacak parayı hesaplama
        $fiyat = 0.5 ;
        $toplam_fiyat = 0 ;
        $kolonlar = [];

        for ($v=0; $v < 15 ; $v++) {
            $k = $v + 1;
            $col1 = "r" . $k . "_1";
            $col2 = "r" . $k . "_2";
            $col3 = "r" . $k . "_3";

            $kolonlar[] = $data[$v][$col1] . $data[$v][$col2] . $data[$v][$col3];


        }

        return $this->hesapYap($kolonlar);


    }
    public function hesapYap(array $data) {

        $fiyat = 0.5 ;
        $toplam_fiyat = 0 ;
        $test = [];
        foreach ($data as $key => $item) {  // arrayı toparladık
                    $test ['test'][] = $item ;
        }

        foreach ($test as $key => $items) {

            foreach ($items as $item) {
                if(strlen($item) ==2 ) {
                    $fiyat = $fiyat * 2;
                }
                if(strlen($item) ==3 ) {
                    $fiyat = $fiyat * 3;
                }
            }

            $toplam_fiyat = $fiyat + $toplam_fiyat;
            $fiyat = 0.5;

        }


        return $toplam_fiyat;


    }


}
