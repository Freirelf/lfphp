<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);
$index = [
  "natirruts",
  "bob marley",
  "Yg Yg",
];

$assoc = [
  "band_1" => "natirruts",
  "band_2" => "bob marley",
  "band_3" => "Yg Yg",
];

array_unshift($index, "", "MVP");
$assoc = ["band_4" => "MVP", "band_5" => ""] + $assoc;

array_push($index, "");
$assoc = $assoc + ["band_6" => ""];

array_shift($index);
array_shift($assoc);

array_pop($index);
array_pop($assoc);

array_unshift($index, "");


var_dump(
  $index,
  $assoc
);

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump(
  $index,
  $assoc
);


/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);
$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

ksort($index);
ksort($assoc);

sort($index);
rsort($assoc);

var_dump(
  $index,
  $assoc
);

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);
var_dump(
  [
    array_keys($index),
    array_values($index),
  ]
);

if (in_array("natirruts", $assoc)) {
  echo "<p>Cause I'm back</p>";
}

$arrToString = implode(", ", $assoc);
echo "<p>Eu curto {$arrToString} e outras bandas</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);
$profile = [
  "name" => "Lucas",
  "company" => "LFSolutions",
  "email" => "lucas@fullstackphp",
];

$template = <<<TPL
  <article>
    <h1>{{name}}</h1>
    <p>{{company}}</p>
    <a title="E-mail para {{name}}" href="mailto:{{email}}">Enviar email</a>
  </article>
TPL;

echo $template;

echo str_replace(array_keys($profile), array_values($profile), $template);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

echo str_replace(
  explode("&", $replaces),
  array_values($profile),
  $template
);