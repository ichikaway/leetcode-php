<?php
class Solution {

	/**
	 * @param String[] $strs
	 * @return String
	 */
	function longestCommonPrefix($strs) {
		if(empty($strs)) {
			return ""; 
		}
		foreach($strs as $str) {
			if(empty($str)) {
				return "";
			}
			$match = self::match($str, $match);
			if(empty($match)) {
				return "";
			}
		}		
		return $match;
	}

	function match($str, $match) {
		if(empty($match)) {
			return $str;
		}
		$ret = "";
		$len = strlen($str);
		for($i = 0; $i < $len; $i++) {
			if($str[$i] == $match[$i]) {
				$ret .= $str[$i];
			} else {
				return $ret;
			}
		}

		return $ret;
	}
}