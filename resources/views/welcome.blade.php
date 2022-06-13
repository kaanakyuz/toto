<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>

        let kupon = {}
        for (let X=1 ; X < 16 ; X++) {
            kupon[X] =
                {
                            [`r${X}_1`] : null ,
                            [`r${X}_2`] : null ,
                            [`r${X}_3`] : null
                }
        }
        function durum() {
            let fiyat = 0.5 ;
            let deger = 0 ;
            let toplam = 0 ;
            let max = 0 ;
            for(var key in kupon) {
                if (kupon.hasOwnProperty(key)) {
                    $.each(kupon[key], function(index, value) {
                        if(value != null) { deger = 1 ; max = max + 1 }
                    });
                    if(max==2) { fiyat = fiyat * 2}
                    if(max==3) { fiyat = fiyat * 3}
                    if(deger == 1) { console.log(key + " | Bu row geçti - " + deger) } else {console.log(key + " | Bu row kaldı - " + deger)  }
                }
                toplam = toplam + deger
                deger = 0 ;
                max = 0 ;

            }
            console.log("Toplam :" + toplam + " Kupon Tutarı : " + fiyat);
            if(toplam ==15 ) { alert('Kupon Hazır')} else{alert("Kupon Eksik..\nOynanması gereken " + ( 15-toplam ) + " Maç Daha Var") }

        }
        $(function(){
            $("input").on("change", function(){
                let cek  = this.name ;
                let row = this.getAttribute('data-row');
                let value = this.getAttribute('data-value');
                if(this.checked) { kupon[row][cek]=value } else { kupon[row][cek] = null }
            });
        });
    </script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-1">

      <?php

        $kuponlar = json_decode($kupon['main_coupon'] , true);
        $yeni = [] ;
        foreach ($kuponlar as   $item) {
                $yeni[] = $item;
        }


        $sistem_kupon = json_decode($kupon['system_coupon'] ,true);


      ?>

    </div>
    <div class="col-md-11">
        <?php
       // dd($sistem_kupon);
        foreach ($sistem_kupon as $key => $sistem) {
            foreach ($sistem as $bey => $sist) {
                echo $sist."-";
            }
            echo "<hr>";
        }

        return;
        ?>
        <div class="row">
            <table class="table-bordered table table-sm">
                <th>0</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <tr class="text-center">
        <?php
             //   dd($hafta);
        // her döngünde 1 column oluşturmalı
            $f_1 = array('f','s','s','s','s','f','f','s','f','f','f','f','s','s','f','s');
            $f_2 = array('s','f','s','s','f','s','f','f','s','f','f','s','f','s','f','s');
            $f_3 = array('f','f','s','f','s','s','s','f','f','s','f','s','s','f','f','s');
            $f_4 = array('s','s','f','f','s','s','f','f','f','s','s','f','f','s','f','s');
            $f_5 = array('f','s','f','s','f','s','s','f','s','f','s','f','s','f','f','s');
            $f_6 = array('s','f','f','s','s','f','s','s','f','f','s','s','f','f','f','s');
            $f_7 = array('s','s','s','f','f','f','s','s','s','s','f','f','f','f','f','s');
             //   print_r($yeni);
                    $tumkolon = [];
                    $mb = [];
                    $kolonlar = array();
                    $fsayi = 0 ;
                    $toplam_fiyat = 0 ;
                    $fiyat = 0.5 ;
                    // 16 adet sistem kuponu yatay oluşuyor...
                    for ($v=0; $v < 15 ; $v++) {
                    $k = $v+1;

                            $col1 = "r".$k."_1" ;
                            $col2 = "r".$k."_2" ;
                            $col3 = "r".$k."_3" ;
                        if($yeni[$v]['formul']==1) {
                          $favori = $yeni[$v][$col1] ;
                          $supriz = $yeni[$v][$col2] . $yeni[$v][$col3];
                          $fsayi = $fsayi +1 ;
                        } else{
                             $favori = $yeni[$v][$col1] . $yeni[$v][$col2] . $yeni[$v][$col3];
                        }
                        for ($b=0; $b < 16 ; $b++) { // 1 maç için 16 sonuçç döneek
                            if($yeni[$v]['formul']==1) {
                            if(${"f_".$fsayi}[$b]=='f'){ $mb[$b]=$favori ;} else { $mb[$b]=$supriz;}
                            } else { $mb[$b] = $favori ;}
                        }
                    $tumkolon[$v] = $mb ; // 16 adet formüllü kupon oluşturuldu....

                    }

              for ($v=0; $v < 15 ; $v++) {
                  echo "<tr>";
                  echo "<td>". $hafta[$v]['event_name']. "</td>";
                    for ($b=0; $b < 16 ; $b++) {
                            $k = $b+1;
                          echo "<td>".  $tumkolon[$v][$b]."</td>" ;
                    }
                    echo "</tr> ";
                }

                    for ($m=0; $m < 16 ; $m++){  //  Oynanacak kuponlar burada...
                        foreach ($tumkolon as $keys => $kup) {
                            $kolonlar[$m][$keys] = $kup[$m];
                        }
                    }

                    echo "<td> Kolon Fiyatları</td>" ;
                    foreach ($kolonlar as $item) {

                        foreach ($item as $items) {
                            if(strlen($items) ==2 ) {
                                $fiyat = $fiyat * 2;
                            }
                            if(strlen($items) ==3 ) {
                                $fiyat = $fiyat * 3;
                            }
                        }
                      ///  echo $fiyat ;
                        $toplam_fiyat = $fiyat + $toplam_fiyat;
                        echo "<td>" .$fiyat . "</td>";
                        $fiyat = 0.5;
                    }
                    ?>
                </tr>
                <tr class="bg-light">
                    <td>Toplam Fiyat</td>
                    <td colspan="16" class="text-center"> <?php echo $toplam_fiyat; ?></td>
                </tr>


            </table>
        </div>
    </div>

    <?php return; ?>
    <div class="col-md-6">

        <ul>
            <?php
            for ($i=1 ; $i < 16 ; $i++) {
            ?>
            <li>Maç <?=$i;?> :
                 <input type="checkbox" name="r<?=$i;?>_1" data-row="<?=$i;?>" data-value="1">
                <input type="checkbox" name="r<?=$i;?>_2" data-row="<?=$i;?>" data-value="0">
                <input type="checkbox" name="r<?=$i;?>_3" data-row="<?=$i;?>" data-value="2">
            </li>
            <?php } ?>
        </ul>

    </div>
    <div class="col-md-6">
        <br>
        <a href="javascript:;" onclick="console.log(kupon)" class="btn btn-sm btn-primary">Kupon</a>
        <a href="javascript:;" onclick="durum()" class="btn btn-sm btn-secondary">Kontrol</a>
        <a href="javascript:;" onclick="hesap()" class="btn btn-sm btn-success">Hesap</a>

    </div>
</div>
</div>
</body>
</html>
