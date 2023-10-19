<?php
//Exemplo 1: Aplicar uma função em um único array:
function quadrado($n) {
    return $n * $n;
}

$numbers = array(1, 2, 3, 4, 5);
$squaredNumbers = array_map("quadrado", $numbers);

echo "<br>";
echo "----------------------------------------------";
echo "<br>";
echo "Exemplo 1: Aplicar uma função em um único array";
echo "<br><br>";
print_r($squaredNumbers);
// Saída: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )


//Exemplo 2: Aplicar uma função em vários arrays:
function soma($a, $b) {
    return $a + $b;
}

$numbers1 = array(1, 2, 3, 4, 5);
$numbers2 = array(5, 4, 3, 2, 1);
$somas = array_map("soma", $numbers1, $numbers2);

echo "<br>";
echo "----------------------------------------------";
echo "<br>";

echo "Exemplo 2: Aplicar uma função em vários arrays:";

echo "<br><br>";

print_r($somas);

// Saída: Array ( [0] => 6 [1] => 6 [2] => 6 [3] => 6 [4] => 6 )


//Exemplo 3: Usando uma função anônima (lambda):

$numbers = array(1, 2, 3, 4, 5);
$doubledNumbers = array_map(function($n) {
    return $n * 2;
}, $numbers);

echo "<br>";
echo "----------------------------------------------";
echo "<br>";

echo "Exemplo 3: Usando uma função anônima (lambda):";

echo "<br><br>";
print_r($doubledNumbers);
// Saída: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

//Exemplo 4: Aplicar função em múltiplos arrays:
$numbers1 = array(1, 2, 3);
$numbers2 = array(10, 20, 30);
$numbers3 = array(100, 200, 300);

$sums = array_map(function($a, $b, $c) {
    return $a + $b + $c;
}, $numbers1, $numbers2, $numbers3);

echo "<br>";
echo "----------------------------------------------";
echo "<br>";
echo "Exemplo 4: Aplicar função em múltiplos arrays:";
echo "<br><br>";
print_r($sums);
// Saída: Array ( [0] => 111 [1] => 222 [2] => 333 )


?>