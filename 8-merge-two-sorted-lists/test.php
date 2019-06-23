<?php
use PHPUnit\Framework\TestCase;
require('./1.php');

final class LeetocdeTest extends TestCase
{

	
	public function provideTestParams()
	{
		return [
			[[1,2,4],[1,3,4], [1,1,2,3,4,4]],
			[[2,4,8],[1,3,4], [1,2,3,4,4,8]],
			[[2,4,8],[], [2,4,8]],
		];
	}

	/**
    * @dataProvider provideTestParams
    */
    public function testOutput($input1, $input2, $expect): void
    {

		$l1 = self::makeList($input1);
		$l2 = self::makeList($input2);

		$out = Solution::mergeTwoLists($l1, $l2);
		$result = self::getList($out);

		$this->assertEquals($expect, $result);
    }

	function makeList($arr) {
		$result = null;
		foreach($arr as $num) {
			if(empty($result)) {
				$result = new ListNode($num);
				$first = $result;
			} else {
				$result->next = new ListNode($num);
				$result = $result->next;
			}
		}
		return $first;
	}


	function getList($li) {
		$result[] = $li->val;
		while(!empty($li->next)) {
			$result[] = $li->next->val;
			$li = $li->next;
		}
		return $result;
	}

}

class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val) { $this->val = $val; }
}