<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);
$userFirstName = "Lucas";
$userLastName = "Freire";

echo "O nome do usuário é: {$userFirstName} {$userLastName}";

$user_first_name = $userFirstName;
$user_last_name = $userLastName;

echo "<p>O nome do usuário é: {$user_first_name} {$user_last_name}</p>";

$userAge = 27;
echo "<p>{$userFirstName} tem {$userAge} anos de idade</p>";

$userEmail = "<p>O email do usuário é: {$userFirstName}@email.com</p>";
echo $userEmail;

$company = "LFSolutions";
$$company = "Bora pro código";
echo "<p>{$company} {$LFSolutions}</p>";

$calcA = 10;
$calcB = 20;
// $calcB = $calcA;
$calcB = &$calcA;
$calcB = 30;

var_dump([
  "a" => $calcA,
  "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);
$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge >= 18);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = new stdClass();
$f = null;

var_dump($a, $b, $c, $d, $e, $f);

if($a || $b || $c || $d || $e || $f) {
  var_dump(true);
} else {
  var_dump(false);
}
/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);
$code ="<article><h1>Um Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

$codeMore = function ($code) {
  var_dump($code);
};
$codeMore("Bora codar!");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Hello World";
$array = [$string];
$object = new stdClass();
$object->hello = $string;
$null = null;
$int = 10;
$float = 10.5;

var_dump([$string, $array, $object, $null, $int, $float]);