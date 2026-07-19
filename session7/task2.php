<?php
function searchFun(...$nums){
    foreach($nums as $num){
        $min=$nums[0];
        $max=$nums[0];
            if($num<$min){
                $min=$num;
            }
             if($num>$max){
                $max=$num;
            }
    }
    return var_dump($min,$max);
}
searchFun(2,4,6,8,10)
?>