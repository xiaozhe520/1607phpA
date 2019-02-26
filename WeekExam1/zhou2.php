<?php
/**
 * @param $n
 * @param $m
 * n-m
 */
 function ft_do($n,$m)
 {
   $sum = range(1,$n);
   $i =0;
   $k = 0;
   $arr=[];
   while (count($sum)>1){
      if (!isset($sum[$i])){
         $arr[] = $sum;
         $arr = [];
         $i = 0;
      }
       $k++;
      if ($k == $m){
        unset($sum[$i]);
        $k=0;
      }else{
        $arr[] = $sum[$i];
      }
       $i++;
   }
     print_r($sum);
 }
// print_r(ft_do(10,3));
/**
 * @param $arr
 * @return array
 * 长度
 */
function san($arr){
  rsort($arr);
 $array = [
     [array_shift($arr)],
     [array_shift($arr)],
     [array_shift($arr)],
 ];
 for ($i = 0;$i<count($arr);$i++){
      $array[2][] = $arr[$i];
      $sum = array_sum($array[2]);
      if ($sum>array_sum($array[1])){
         $array = [
             [$array[2]],
             [$array[1]],
             [$array[0]],
         ];
      }elseif($sum>array_sum($array[0])){
          $array = [
              [$array[1]],
              [$array[2]],
              [$array[0]],
          ];
      }
 }
 return $array;
}
//print_r(san([99,100,10,30,80,70,60]));
/**
 * @param $a
 * @param $b
 * @return bool
 * 最大值
 */
function jb($a,$b){
     return intval(($a.''.$b))<($b.''.$a);
}
function wei($arr){
   usort($arr,'jb');
   return $arr;
}
//print_r(wei([1,96,97,9,8,88,81]));

/**
 * @param $active_time
 * @param $process_time
 * @return float|int
 * 银行
 */
function yin($active_time,$process_time){
   $chuang = [];
   $w_time= 0;
   $count = count($active_time);
   for ($i=0;$i<$count;$i++){
        if ($i<4){
            $chuang[] = $active_time[$i]+$process_time[$i];
            continue;
        }
        sort($chuang);
        $deng_time= array_shift($chuang);
        if ($deng_time > $active_time[$i]){
              $w_time += $deng_time-$active_time[$i];
              $new_time = $deng_time+$process_time[$i];
        }else{
            $new_time = $active_time[$i]+$process_time[$i];
        }
        $chuang [] = $new_time;
   }
   return $w_time/$count;
}
print_r(yin([9.01, 9.10, 9.20, 9.21, 9.22],[0.30, 0.18, 0.22, 0.47, 0.11]));