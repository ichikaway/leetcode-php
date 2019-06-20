<?php
use PHPUnit\Framework\TestCase;
require('./1.php');

final class LeetocdeTest extends TestCase
{

	
	public function provideTestParams()
	{
		return [
			["abcabcbb", 3],
			["bbbbb", 1],
			["pwwkew", 3],
			["abcdefga", 7],
			["abcdefg", 7],
			["", 0],
		];
	}

	/**
    * @dataProvider provideTestParams
    */
    public function testOutput($input, $expect): void
    {

		$out = Solution::lengthOfLongestSubstring($input);

		$this->assertEquals($expect, $out);
    }
}