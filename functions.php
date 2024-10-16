<?php

// Function to calculate the difference in years, months, and days using timestamps
function calculateDateDifference($currentDate, $targetDate) {
    // Convert dates to timestamps for easier comparison
    $currentTimestamp = strtotime($currentDate);
    $targetTimestamp = strtotime($targetDate);

    // Calculate the difference in seconds
    $differenceInSeconds = abs($currentTimestamp - $targetTimestamp);

    // Calculate years, months, and days from the difference
    $years = floor($differenceInSeconds / (365 * 24 * 60 * 60));
    $months = floor(($differenceInSeconds % (365 * 24 * 60 * 60)) / (30 * 24 * 60 * 60));
    $days = floor(($differenceInSeconds % (30 * 24 * 60 * 60)) / (24 * 60 * 60));

    return [$years, $months, $days];
}

// Function to check if the current date is past the expiration date
function isPastExpiration($currentDate, $expirationDate) {
    // Convert dates to timestamps for comparison
    return strtotime($currentDate) > strtotime($expirationDate);
}
