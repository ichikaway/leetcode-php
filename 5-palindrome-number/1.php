<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
		if ($x < 0) {
			return false;
		}		
		while($x > 0) {
			$stack[] = $x%10;
			$x = intval($x/10);
		}

		$count = count($stack);
		for($i=0; $i < intval($count/2); $i++){
			$left = $stack[$i];
			$right = $stack[$count-$i-1];
			if($left !== $right) {
				return false;
			}
		}
		return true;
    }
}