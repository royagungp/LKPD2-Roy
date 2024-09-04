<?php
$stundets = [//dimensi 1 array index
    [//dimensi2
        'name' => 'Andi',//array asosiatif
        'nilai' => [80, 78,82,78,88],//dimensi 3
    ],
    [
        'name' => 'Beri',
        'nilai' => [86,70,80,85,82],
    ],  
    [
        'name' => 'Ceri',
        'nilai' => [70, 60, 70, 60, 70],
    ],
    [
        'name' => 'Deri',
        'nilai' => [80, 90, 80, 90, 80],
    ],
];
echo "<ol>";
foreach ($stundets as $key => $value) {
    echo "<li>" . $value['name'] . "=" . array_sum($value['nilai']) / count($value['nilai']) . "</li>";
}
echo "</ol>";
?>