<?php

$randomArray = [];

while (count($randomArray) < 15 ) {
    $number = rand(0, 100);

    if (!in_array($number, $randomArray)) {
        $randomArray[] = $number;
    }
    return $randomArray;
};
?>

<?php var_dump($randomArray); ?>