<?php
use PHPUnit\Framework\TestCase;
require('./1.php');

final class LeetocdeTest extends TestCase
{

	
	public function provideTestParams()
	{
		return [
			['', true],
			['()[]{}', true],
			['()', true],
			['([])', true],
			['([{}])', true],
			['([', false],
			['([)', false],
			['([])}', false],
			['([]', false],
		];
	}

	/**
    * @dataProvider provideTestParams
    */
    public function testOutput($input, $expect): void
    {

		$out = Solution::isValid($input);

		$this->assertEquals($expect, $out);
    }
}