<?php
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
		$minus = false;
		if ($x < 0 ) {
			$minus = true;
			$x = $x * -1;
		}
        $a = str_split((string)$x);
		$arr = array_reverse($a);

		$b;
		foreach($arr as $num) {
			$b .= $num;
		}
		$result = intval($b);
		if( $minus) {
			$result = $result * -1;
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
$input = 2147483648;
$out = Solution::reverse($input);

var_dump($out);

echo 2**31;