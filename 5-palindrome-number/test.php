<?php
use PHPUnit\Framework\TestCase;
require('./1.php');

final class LeetocdeTest extends TestCase
{

	
	public function provideTestParams()
	{
		return [
			[1, true],
			[5, true],
			[121, true],
			[1221, true],
			[11, true],
			[111, true],
			[-12, false],
			[123211, false],
			[551, false],
			[10, false],
		];
	}

	/**
    * @dataProvider provideTestParams
    */
    public function testOutput($input, $expect): void
    {

		$out = Solution::isPalindrome($input);

		$this->assertEquals($expect, $out);
    }
}