<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {

		$result = 0;
		while ($x != 0) {
			$pop = $x % 10;
			$x = intval($x / 10);
			//echo $pop . "\n" . $x . "\n";
			$result = $result * 10 + $pop;
		}
		$max = 2**31;
		$min = -(2**31);
		if ( $result < $min || $max < $result) {
			return 0;
		}
		return $result;
    }
}


$input = -1230;
//$input = 2147483648;
$out = Solution::reverse($input);

var_dump($out);