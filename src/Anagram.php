<?php

declare(strict_types=1);

namespace LeadDeskTasks;

/** PHP version 8.3.7 */
final class Anagram implements AnagramInterface
{
    /**
     * @inheritdoc
     * Complexity: O(N * M) with N, M are the number of characters in $word1 and $word2 respectively
     */
    public function isAnagram(string $word1, string $word2): bool
    {
        if (strlen($word1) !== strlen($word2)) {
            return false;
        }

        foreach (str_split($word1) as $char) {
            $word2 = str_replace($char, '', $word2);
        }

        return strlen($word2) == 0;
    }
}