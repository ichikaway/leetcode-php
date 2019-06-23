<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {

		$result = $node = null;
		while(true) {
			if(is_null($l1) && is_null($l2)) {
				return $result;
			}
			$val1 = $l1->val;
			$val2 = $l2->val;

			if( (is_null($l1) && !is_null($l2)) || ((!is_null($l1) && !is_null($l2)) && $val1 >= $val2)) {
				if(is_null($result)) {
					$node = new ListNode($val2);
					$result = $node;
				} else {
					$node->next = new ListNode($val2);
					$node= $node->next;
				}
				$l2 = $l2->next;
			} else if( (is_null($l2) && !is_null($l1)) || ((!is_null($l1) && !is_null($l2)) && $val2 >= $val1)) {
				if(is_null($result)) {
					$node = new ListNode($val1);
					$result = $node;
				} else {
					$node->next = new ListNode($val1);
					$node= $node->next;
				}
				$l1 = $l1->next;
			} else {
				return $result;
			}
		}
    }
}