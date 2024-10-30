<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "Full Stack PHP Developer");
const AUTHOR = "Lucas F.";

$formation = true;
if ($formation) {
    define("COURSE_TYPE", "Formação");
} else {
    define("COURSE_TYPE", "Bootcamp");
}

echo "<p> COURSE_TYPE COURSE AUTHOR </p>";
echo "<p> {COURSE_TYPE} {COURSE} {AUTHOR} </p>";
echo "<p>", COURSE_TYPE, " ", COURSE, " de ", AUTHOR, "</p>";
echo "<p>" . COURSE_TYPE . " " . COURSE, " de " . AUTHOR . "</p>";

class Config {
    const User = "root";
    const Host = "localhost";
};

echo "<p>", Config::User, " ", Config::Host, "</p>";

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

var_dump([
  __LINE__,
  __FILE__,
  __DIR__,
]);

function fullStackPHP() {
  return __FUNCTION__;
}

var_dump(fullStackPHP());

trait MyTrait {
  public $traitName = __TRAIT__;
}

var_dump(MyTrait::class);

class LfPHP 
{
  use MyTrait;
  public $className = __CLASS__;
}

var_dump(new LfPHP());

require __DIR__ . "/MyClass.php";
var_dump(new \Source\MyClass());
var_dump(\Source\MyClass::class);