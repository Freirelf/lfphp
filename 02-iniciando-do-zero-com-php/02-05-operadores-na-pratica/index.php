<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);
$operatorA = 10;
$operatrs = [
  "a += 5" => ($operatorA += 5),
  "a -= 5" => ($operatorA -= 5),
  "a *= 5" => ($operatorA *= 5),
  "a /= 5" => ($operatorA /= 5),
];

var_dump($operatrs);

$incrementA= 5;
$incrementB = 5;
$increment = [
  "pós-incremento" => $incrementA++,
  "res-incremento" => $incrementA,
  "pré-incremento" => ++$incrementA,
  "pós-decremento" => $incrementB--,
  "res-decremento" => $incrementB,
  "pré-decremento" => --$incrementB
];

var_dump($increment);


/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);
$relatedA = 10;
$relatedB = "5";
$relatedC = 5;
$related = [
  "a == b" => ($relatedA == $relatedB),
  "a != b" => ($relatedA != $relatedB),
  "a === b" => ($relatedA === $relatedB),
  "a !== b" => ($relatedA !== $relatedB),
  "a > c" => ($relatedA > $relatedC),
  "a < c" => ($relatedA < $relatedC),
  "a >= b" => ($relatedA >= $relatedB),
  "a >= c" => ($relatedA >= $relatedC),
  "a <= c" => ($relatedA <= $relatedC),
];

var_dump($related);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);
$logicA = true; 
$logicB = false;
$logic = [
  "a and b" => ($logicA and $logicB),
  "a or b" => ($logicA or $logicB),
  "a xor b" => ($logicA xor $logicB),
  "a && b" => ($logicA && $logicB),
  "a || b" => ($logicA || $logicB),
  "! b" => (! $logicB),
  "! a" => (! $logicA),
];

var_dump($logic);

/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 10;
$calcB = 5;
$calc = [
  "a + b" => ($calcA + $calcB),
  "a - b" => ($calcA - $calcB),
  "a * b" => ($calcA * $calcB),
  "a / b" => ($calcA / $calcB),
  "a % b" => ($calcA % $calcB),
  "a ** b" => ($calcA ** $calcB),
];

var_dump($calc);