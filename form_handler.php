<?php

$start = $_GET["start"];
$end   = $_GET["end"];

$prime_numbers = find_prime_numbers($start, $end);
$amount        = count($prime_numbers);
$last_index    = $amount - 1;

echo "<center>Berikut bilangan prima antara ".$start." - ".$end."<br><br>";

foreach ($prime_numbers as $index => $prime_number){
    if($index !== $last_index){
        echo $prime_number.", ";
    } else {
        echo $prime_number;
    }
}

echo "<br><br><a href='index.php'> Back </a>
</center>";

function find_prime_numbers($start, $end){
    $prime_numbers = array();

    for($i = $start; $i <= $end; $i++){
        $divisors = array();

        for($j = 1; $j <= $i; $j++){
            if (is_integer($i / $j)){
                $divisors[] = $j;
            }
        }

        if(count($divisors) === 2 AND $divisors[0] === 1 AND $divisors[1] === $i){
            $prime_numbers[] = $i;
        }
    }
    return $prime_numbers;
}
