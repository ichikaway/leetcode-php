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
        $one = self::getNum($l1);
        $two = self::getNum($l2);

		(float)$added = (float)$one + (float)$two;
		echo (string)$added;
		exit;

		$arr = str_split($added);
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

	function getNum($l) {
		$arr = [];
		$obj = $l;
		while(true) {
			if (is_null($obj->next)) {
				$arr[] = $obj->val;
				$result = array_reverse($arr);
				$ret = '';
				foreach($result as $num) {
					$ret .= (string)$num;
				}
				return $ret;
			}
			$arr[] = $obj->val;
			$obj = $obj->next;
		}
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


function getList($li, &$result = []) {
	if (is_null($li->next)) {
		$result[] = $li->val;
		return;
	} else {
		getList($li->next, $result);
	}
}

//$a = 1000000000000000000000000000001;
//$a = gmp_init(1000000000000000000000000000001);
//echo sprintf("%30F",$a);exit;

//$l1 = makeList([2,4,3]);
//$l2 = makeList([5,6,4]);
$l1 = makeList([1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1]);
$l2 = makeList([5,6,4]);
getList($l1, $result = []);
var_dump($result);exit;
var_dump(getList($l1, $result));exit;
var_dump(Solution::addTwoNumbers($l1, $l2));


/*
$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(3);

$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);
 */