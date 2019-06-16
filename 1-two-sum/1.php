<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $max = count($nums);
        foreach($nums as $i => $num) {
            for($n = $i+1; $n < $max  ; $n++) {
				echo "$i, $n\n";
                if ($num + $nums[$n] === $target) {
                    return [$i, $n];
                }
            }
        }
    }
}

$a=[1,2,3,4];

var_dump(Solution::twoSum($a, 5));