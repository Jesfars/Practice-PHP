<?php
// Define two matrices (2x3 and 3x2)
$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6)
);

$matrix2 = array(
    array(7, 8),
    array(9, 10),
    array(11, 12)
);

// Initialize an empty result matrix (2x2)
$result_matrix = array_fill(0, count($matrix1), array_fill(0, count($matrix2[0]), 0));

// Perform matrix multiplication
for ($i = 0; $i < count($matrix1); $i++) {
    for ($j = 0; $j < count($matrix2[0]); $j++) {
        for ($k = 0; $k < count($matrix2); $k++) {
            $result_matrix[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
        }
    }
}

// Print the result matrix
foreach ($result_matrix as $row) {
    echo implode(' ', $row)."\n";
}
?>