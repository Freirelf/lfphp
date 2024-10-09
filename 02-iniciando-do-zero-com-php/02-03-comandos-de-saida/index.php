<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<p>Hello World!", " ", "<span class='tag'>#BoraCodar</span>", "</p>";
$hello = "Hello World!";
$code = "<span class='tag'>#BoraCodar</span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>Faltam 1 $day para o natal</p>";
echo "<p>Faltam 10 {$day}s para o natal</p>";

echo "<h3>{$hello} {$code}</h3>";

echo "<h3>" . $hello . " " . $code . "</h3>";

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);
print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);
// Exibir um vetor. Contração de um array

$array = [ 
  "company" => "LFSolutions",
  "course" => "PHP Básico",
  "class" => "Comandos de saída"
];

print_r($array);
echo "<pre>", print_r($array, true), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);
// print_f → saída formatada

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "Aprendendo PHP";

printf($article, $title, $subtitle);
echo sprintf($article, $title, $subtitle);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);
// vprintf → variável formatada que utiliza um array

$company = "<article><h1>Escola %s</h1><p> Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

var_dump(
  $array,
  $hello,
  $company
);