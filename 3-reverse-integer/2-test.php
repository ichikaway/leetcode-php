<?php
use PHPUnit\Framework\TestCase;
require('./2.php');

final class LeetocdeTest extends TestCase
{
    public function testOutput(): void
    {

		$input = -1230;
		$expect = -321;
		$out = Solution::reverse($input);

		$this->assertEquals($expect, $out);
    }
}