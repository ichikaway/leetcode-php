<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
		$len = strlen($s);
		if($len === 0) {
			return 0;
		}
		$maxLen = 1;
		$word = "";
		for($i = 0 ; $i < $len ; $i++) {
			$next = $s[$i];
			if($word === "") {
				$word = $next;
			} elseif(($position = strpos($word, $next)) !== false) {
				if ($position + 1 < strlen($word)) {
					$word = substr($word, $position + 1) . $next;
				} else {
					$word = $s[$i];
				}
			} else {
				$word .= $next;
			}
			$currentLen = strlen($word);
			if($currentLen > $maxLen) {
				$maxLen = $currentLen;
			}
		}

		return $maxLen;
    }
}