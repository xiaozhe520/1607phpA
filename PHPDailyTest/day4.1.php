<?php
  $n = 6;
/**
 * @param $n
 * @return int
 * 非递归
 */
  function fei($n){
      if ($n<=0){
        return 0;
      }
      $array[1]=$array[2]=1;
      for ($i = 3;$i<=$n;$i++){
       $array[$i] = $array[$i-1]+$array[$i-2];
      }
      return $array[$n];
  }
//  print_r(fei($n));

 /**
 * @param $n
 * @return int
  * 递归调用
 */
    function fei1($n){
    if ($n<=0){
      return 0;
    }
    if ($n == 1 || $n==2){
      return 1;
    }
    return fei1($n-1)+fei1($n-2);
    }
  print_r(fei1($n));