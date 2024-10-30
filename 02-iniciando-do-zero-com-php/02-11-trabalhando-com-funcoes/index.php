<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__ . "/functions.php";

var_dump(functionName("bob marley", "reggae", "jazz"));

var_dump(optionArgs("bob marley"));
var_dump(optionArgs("bob marley", "reggae",));
var_dump(optionArgs("bob marley", "reggae", "jazz"));


/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 80;
$height = 1.80;
echo "IMC: " . calcImc();
/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);
$pay = payTotal(100);
$pay = payTotal(200);
$pay = payTotal(300);

echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Brian", "Douglas", "Jorge"));