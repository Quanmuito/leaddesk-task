<?php

declare(strict_types=1);
require_once dirname(__DIR__) . '/vendor/autoload.php';

use LeadDeskTasks\MaxSubArray;
use LeadDeskTasks\Anagram;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];

    switch ($type) {
        case 'SUB_ARRAY':
            $arrayString = $_POST['array'];
            $arrayString = str_replace('[', '', $arrayString);
            $arrayString = str_replace(']', '', $arrayString);
            $array = explode(',', $arrayString);
            $maxSubArray = new MaxSubArray();

            echo sprintf('Maximum contiguous subarray sum: %s', $maxSubArray->contiguous($array));
            break;

        case 'ANAGRAM':
            $word1 = strtoupper($_POST['word1']);
            $word2 = strtoupper($_POST['word2']);
            $anagram = new Anagram();

            echo sprintf(
                '%s and %s %s anagrams of each other',
                $word1,
                $word2,
                $anagram->isAnagram($word1, $word2) ? 'are' : 'are NOT',
            );
            break;

        default:
            echo 'Not supported type';
            break;
    }
}