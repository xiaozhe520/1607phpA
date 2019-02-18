<?php
/**
 * @param $n
 * @return float
 * 水仙花
 */
 function shui($n){
  $bai = floor($n/100);
  $ge = floor($n%10);
  $shi = floor(($n%100)/10);
  $sum = pow($bai,3)+pow($shi,3)+pow($ge,3);
  if ($sum == $n){
     echo "是水仙花";
  }else{
      echo "false";
  }
 }
// print_r(shui(154));

 function shou($n){
  $len = strlen($n);
  $sum = 0;
  for ($i =0;$i<$len;$i++){
     for ($s=0;$s<$len;$s++){
       if ($n[$i]==$n[$s]){
         $sum++;
       }
     }
  }
     if ($sum == 3){
//         echo $n[];
     }else{
         echo  "false";
     }

 }
 print_r(shou('zstsszz'));

/**
 * @param $n
 * 回文
 */
  function hui($n){
   $len = strlen($n);
   $str = '';
   for ($i=$len-1;$i>=0;$i--){
    $str .=$n[$i];
   }
   if ($str == $n){
    echo "是回文字符串";
   }else{
       echo  "不是";
   }

  }
//  print_r(hui('abba'));

/**
 * @param $n
 * @return int
 * 斐波那契数列
 */
  function fei($n){
   if ($n<=0){
       return 0;
   }
   $array[1]=$array[2]=1;
   for ($i = 3;$i<=$n;$i++){
     $array[$i] = $array[$i-1]+$array[$i-2];
   }
   return $array;
  }
//  print_r(fei(5));
/**
 * @param $n
 * @return string
 * 数字与字母
 */
  function zm($n){
   $shu = range('a','z');
   if ($n>26){
       $str = '';
     if ($n%26 == 0){
        $str .= 'z';
     }else{
       $str .= $shu[$n%26-1];
       zm(floor($n/26));
     }
     return $str;
   }else{
      return $shu[$n-1];
   }
  }
//  print_r(zm(708));

/**
 * @param $n
 * @return int
 * 台阶
 */
  function tai($n){
    if ($n<=0){
     return 0;
    }
    $array[1]= 1;
    $array[2]=2;
    for ($i=3;$i<=$n;$i++){
      $array[$i] = $array[$i-1] + $array[$i-2];
    }
    return $array;
  }
//  print_r(tai(5));


