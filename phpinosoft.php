<?php  

function luasLingkaran($jari){
    $jari2 = $jari/3;
    $l = 3.14*$jari2*$jari2;
    return $l;
}

function kelilingLingkaran($jari){
    $jari2 = $jari/5;
    $k = 3.14*2*$jari2;
    return $k;
}
function luasPersegi($angka){
    $panjang = $angka/3;
    $lebar = $angka/5;
    $l = $panjang*$lebar;
    return $l;
}

for($i=1;$i<=100;$i++){
    if( $i%3 == 0 && $i%5 == 0){
        echo number_format(luasPersegi($i),2); 
        
    }
    else if($i%3 == 0){
        echo number_format(luasLingkaran($i),2);
       
    }
    else if($i%5 == 0){
        echo number_format(kelilingLingkaran($i),2);
       
    }
   else {
    echo number_format($i,2);
   }
   echo "<br>";
}