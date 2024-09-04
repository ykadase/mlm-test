<?php
// Define the payout constants
define("PAYOUT_LAYER_1", 20);
define("PAYOUT_LAYER_2", 10);
define("PAYOUT_LAYER_3", 5);
define("PAYOUT_LAYER_4", 1);
define("PAYOUT_LAYER_5", 0.10);

/**
 * Function to calculate the total amount paid out to a participant
 * based on the number of recruits in each layer.
 *
 * @param int $N1 Number of participants in Layer 1
 * @param int $N2 Number of participants in Layer 2
 * @param int $N3 Number of participants in Layer 3
 * @param int $N4 Number of participants in Layer 4
 * @param int $N5 Number of participants in Layer 5
 * @return float Total amount paid out
 */

// function calculateTotalPaidOut($N1, $N2, $N3, $N4, $N5) {
//     $totalPaidOut = ($N1 * 20) + ($N2 * 10) + ($N3 * 5) + ($N4 * 1) + ($N5 * 0.10);
//     return $totalPaidOut;
// }



function calculateTotalPaidOut($N1, $N2, $N3, $N4, $N5) {
    $totalPaidOut = ($N1 * PAYOUT_LAYER_1) + 
                    ($N2 * PAYOUT_LAYER_2) + 
                    ($N3 * PAYOUT_LAYER_3) + 
                    ($N4 * PAYOUT_LAYER_4) + 
                    ($N5 * PAYOUT_LAYER_5);
    return $totalPaidOut;
}


/**
 * Function to generate a random number of participants within a specified range.
 *
 * @param int $min Minimum number of participants
 * @param int $max Maximum number of participants
 * @return int Random number of participants
 */
function getRandomParticipants($min, $max) {
    return rand($min, $max);
}

// Set maximum participants per layer
$maxN1 = 10;        // Layer 1
$maxN2 = 100;       // Layer 2
$maxN3 = 1000;      // Layer 3
$maxN4 = 10000;     // Layer 4
$maxN5 = 100000;    // Layer 5


// Generate random participants for each layer
$N1 = getRandomParticipants(0, $maxN1);
$N2 = getRandomParticipants(0, $maxN2);
$N3 = getRandomParticipants(0, $maxN3);
$N4 = getRandomParticipants(0, $maxN4);
$N5 = getRandomParticipants(0, $maxN5);

// Calculate the total paid out
$totalPaidOut = calculateTotalPaidOut($N1, $N2, $N3, $N4, $N5);

// Display the results
echo "=== MLM Total Paid Out Calculation ===\n";
echo "Layer 1 Participants: $N1 \t\t(RM20 \teach)\n";
echo "Layer 2 Participants: $N2 \t\t(RM10 \teach)\n";
echo "Layer 3 Participants: $N3 \t\t(RM5  \teach)\n";
echo "Layer 4 Participants: $N4 \t\t(RM1  \teach)\n";
echo "Layer 5 Participants: $N5 \t\t(RM0.10 each)\n";
echo "---------------------------------------\n";
echo "Total Paid Out: RM " . number_format($totalPaidOut, 2) . "\n";
echo "\n\n";
?>
