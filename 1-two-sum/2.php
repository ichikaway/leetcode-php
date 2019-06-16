<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
		$hash;
        foreach($nums as $i => $num) {
			$hash[$num] = $i;
        }
        foreach($nums as $i => $num) {
			$newTarget = $target - $num;
			if(isset($hash[$newTarget]) && $i !== $hash[$newTarget]) {
				return [$i,$hash[$newTarget]]; 
			}
        }
    }
}

$a = [3,2,4];

var_dump(Solution::twoSum($a, 6));