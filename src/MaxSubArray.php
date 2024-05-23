<?php

declare(strict_types=1);

namespace LeadDeskTasks;

/** PHP version 8.3.7 */
final class MaxSubArray implements MaxSubArrayInterface
{
    /**
     * @param array $array
     * @return int the first numeric element in array
     * Complexity: O(N) with N is the number of elements in $array
     */
    private static function getFirstNumericElement(array $array): int
    {
        for ($i = 0; $i < count($array); $i++) {
            if (is_numeric($array[$i])) {
                return (int)$array[$i];
            }
        }
        return 0;
    }

    /**
     * @inheritdoc
     * Complexity: O(N) with N is the number of elements in $array
     */
    public function contiguous(array $array): int
    {
        if (count($array) === 1) {
            return is_numeric($array[0]) ? (int)$array[0] : 0;
        }

        $subArraySum = (int)'-1e6';
        $maxSum = self::getFirstNumericElement($array);

        foreach ($array as $value) {
            // Start a new subarray if encounter non-numeric element
            if (!is_numeric($value)) {
                $subArraySum = (int)'-1e6';
                continue;
            }

            // Update sum of subarray. If total of previous elements is negative and smaller than current element, start a new subarray.
            $subArraySum = max($subArraySum + (int)$value, (int)$value);
            # Update maximum sum of subarray
            $maxSum = max($maxSum, $subArraySum);
        }
        return $maxSum;
    }
}