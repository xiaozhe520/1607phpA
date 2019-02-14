<?php
 $n= 154;
 flower($n);
 function flower($n){
     $bai = floor($n/100);
     $shi = floor(($n/10)-10*$bai);
     $gei = $n-$bai*100-$shi*10;
     $sum = $gei*$gei*$gei+$shi*$shi*$shi+$bai*$bai*$bai;
     if ($sum == $n){
         echo "true";
     }else{
         echo "false";
     }
 }