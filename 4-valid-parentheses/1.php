<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
		if(empty($s)) {
			return true;
		}		
		$pair = ['(' => ')', '{' => '}', '[' => ']'];

		$stack = [];
		$result = false;
		$openMax = 0;
		for($i = 0; $i < strlen($s); $i++) {
			if(self::isOpen($s[$i])) {
				$openMax++;
				$stack[$openMax] = $s[$i];
			} else {
				if($s[$i] == $pair[$stack[$openMax]]) {
					$openMax--;
					$result = true;
				} else {
					return false;
				}
			}
		}
		if ($openMax > 0) {
			return false;
		}
		return $result;
    }

	function isOpen($s) {
		$open = ['(', '{', '['];
		return in_array($s, $open, true);
	}
}