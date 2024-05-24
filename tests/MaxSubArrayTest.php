<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use LeadDeskTasks\MaxSubArray;

class MaxSubArrayTest extends TestCase
{
    const CONTIGUOUS_TEST_CASES = [
        [6, [-1, 1, 5, -6, 3]],
        [9, [5, -1, 2, 3, -8, 4]],
        [-1, [-1, -2, -3, -4]],
        [-2, [-4, -3, -2]],
        [2, [-4, -3, 2]],
        [5, [5]],
        [-5, [-5]],
        [8, [-3, 2, -4, 8]],
        [10, [-3, 4, -2, 8]],
        [11, ['-3', 4, -2, 9]],
        [12, ['-3', 4, -2, '10']],
        [13, ['-3', '5', '-2', '10']],
        [7, [-1, 1, 'a', 7, -6, 3]],
        [14, [-1, 'a', 1, 5, -6, 'b', 3, 11]],
        [15, [-1, 'a', 1, '5', -6, 'b', 3, '12']],
        [16, ['-1', 'a', '1', '5', '-6', 'b', '3', '13']],
        [1, ['a', 'b', 'c', 'd', 'e', 1]],
        [-3, ['a', 'b', 'c', 'd', 'e', -3]],
        [3, ['a', 'b', 'c', 'd', 'e', 1, 2]],
        [0, ['a', 'b', 'c', 'd', 'e']],
    ];

    public function testContiguous()
    {
        $maxSubarray = new MaxSubArray();

        foreach (self::CONTIGUOUS_TEST_CASES as $testCase) {
            $expected = $testCase[0];
            $input = $testCase[1];
            $this->assertEquals($expected,  $maxSubarray->contiguous($input));
        }
    }
}