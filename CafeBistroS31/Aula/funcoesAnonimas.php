<?php
//Exemplo 1: Usando uma função anônima como callback em array_map:
$numbers = array(1, 2, 3, 4, 5);
$squaredNumbers = array_map(function($n) {
    return $n * $n;
}, $numbers);
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
print_r($squaredNumbers);
// Saída: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )


//Exemplo 2: Ordenando um array com uma função anônima usando usort:
$fruits = array("apple", "banana", "cherry", "date");
usort($fruits, function($a, $b) {
    return strcmp($a, $b);
});
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
print_r($fruits);
// Saída: Array ( [0] => apple [1] => banana [2] => cherry [3] => date )



//Exemplo 3: Filtrando elementos em um array usando array_filter com função anônima:
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$evenNumbers = array_filter($numbers, function($n) {
    return $n % 2 == 0;
});
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
print_r($evenNumbers);
// Saída: Array ( [1] => 2 [3] => 4 [5] => 6 [7] => 8 [9] => 10 )


//Exemplo 4: Usando uma função anônima como callback em array_walk:
$colors = array("red", "green", "blue");
array_walk($colors, function(&$value, $key) {
    $value = strtoupper($value);
});
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
print_r($colors);
// Saída: Array ( [0] => RED [1] => GREEN [2] => BLUE )



//Exemplo 5: Usando uma função anônima como função de retorno para encapsulamento:
function getMultiplier($factor) {
    return function($number) use ($factor) {
        return $number * $factor;
    };
}

$double = getMultiplier(2);
$triple = getMultiplier(3);
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
echo $double(5); // Saída: 10
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
echo $triple(5); // Saída: 15


//Exemplo6: callback no php
function processArray(array $array, callable $callback) {
    $result = array();

    foreach ($array as $item) {
        $result[] = $callback($item);
    }

    return $result;
}

$numbers = array(1, 2, 3, 4, 5);

// Definição de uma função de callback (função anônima)
$double = function($num) {
    return $num * 2;
};

$processed = processArray($numbers, $double);
echo "<br>";
echo "----------------------------------------------";
echo "<br>";
print_r($processed);
// Saída: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
