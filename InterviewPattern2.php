<?php

define('LINES', 16);

$starCount = 1;

for ($i = 1; $i <= LINES; $i++) {
    error_log('First i is: ' . $i);
    error_log('First Star Count is: ' . $starCount);

    $gapPosition = $i * 2 - 1;

    for ($j = 1; $j <= $starCount; $j++) {
        echo "*";

        if ($j === $gapPosition) {
            echo "&nbsp;";
        }
    }

    echo "<br/>";
    $starCount += $i + 1;
}

// Decreasing Pyramid

$newStarCount = $starCount - LINES;

for ($i = LINES - 1; $i >= 0; $i--) {
    $gapPosition = ($i + 1) * 2 - 1;

    for ($j = 1; $j <= $newStarCount; $j++) {
        echo "*";

        if ($j === $gapPosition) {
            echo "&nbsp;";
        }
    }

    echo "<br/>";
    $newStarCount -= $i + 1;
}
