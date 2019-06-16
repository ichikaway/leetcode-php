<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val) { $this->val = $val; }
}


class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
		$carry = false;
		$list = null;
		$last = null;
		while (!self::isEnd($l1, $l2)) {
			$sum = self::add($l1, $l2);
			echo "$sum \n";
			if($carry) {
				$sum++;
			}
			if($sum >= 10) {
				$sum = $sum - 10;
				$carry = true;
			} else {
				$carry = false;
			}

			$l1 = self::getNext($l1);
			$l2 = self::getNext($l2);
			$node = new ListNode($sum);
			if ($list) {
				$last->next = $node;
				$last = $node;
			} else {
				$list = $node;
				$last = $node;
			}
		}	
		if($carry) {
			$node = new ListNode(1);
			$last->next = $node;
		}
		return $list;
    }

	function isEnd($l1 = null, $l2 = null) {
		if (is_null($l1) && is_null($l2)) {
			return true;
		}
		return false;
	}

	function getNext($l = null) {
		if (is_null($l)) {
			return null;
		}
		return $l->next;
	}

	function add($l1 = null, $l2 = null) {
		if (is_null($l1)) {
			$a = 0;
		} else {
			$a = $l1->val;
		}
		if (is_null($l2)) {
			$b = 0;
		} else {
			$b = $l2->val;
		}
		return $a+$b;
	}



}


function makeList($arr) {
		$result = null;
		foreach($arr as $num) {
			if(empty($result)) {
				$result = new ListNode($num);
			} else {
				$tmp = new ListNode($num);
				$tmp->next = $result;
				$result = $tmp;
			}
		}
		return $result;
}

//$l1 = makeList([1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1]);
//$l2 = makeList([5,6,4]);
//var_dump(Solution::addTwoNumbers($l1, $l2));

$l1 = makeList([5]);
$l2 = makeList([5]);
var_dump(Solution::addTwoNumbers($l1, $l2));



/*
$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(3);

$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);
 */