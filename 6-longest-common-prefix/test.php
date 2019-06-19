<?php
use PHPUnit\Framework\TestCase;
require('./1.php');

final class LeetocdeTest extends TestCase
{

	
	public function provideTestParams()
	{
		return [
			[["flower","flow","flight"], "fl"],
			[["flow","flow","flow"], "flow"],
			[["","flower",""], ""],
			[["dog","racecar","car"], ""],
			[[], ""],
		];
	}

	/**
    * @dataProvider provideTestParams
    */
    public function testOutput($input, $expect): void
    {

		$out = Solution::longestCommonPrefix($input);

		$this->assertEquals($expect, $out);
    }
}