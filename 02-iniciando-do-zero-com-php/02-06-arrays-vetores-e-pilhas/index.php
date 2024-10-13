<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);
$arrA = array(1, 2, 3);
$arrA = [0, 1, 2, 3];

var_dump($arrA);

$arrayIndex =[ 
  "Brian", 
  "Douglas", 
  "Jorge",
];

$arrayIndex[] = "Joaquim";
$arrayIndex[] = "Philiph";

var_dump($arrayIndex);
/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssociative = [
  "vocal" => "Brian",
  "solo_guitar" => "Douglas",
  "base_bass" => "Jorge",
  "base_guitar" => "Cliff"
];

$arrayAssociative["drums"] = "Joaquim";
$arrayAssociative["rock_band"] = "AC/DC";

var_dump($arrayAssociative);


/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);
$brian = ["Brian", "Mic"];
$angus = ["name" => "Douglas", "instrument" => "Guitar"];
$instrument = [
  $brian,
  $angus,
];

var_dump($instrument);

var_dump([
  "brian" => $brian,
  "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);
$acdc = [
  "vocal" => "Brian",
  "solo_guitar" => "Douglas",
  "base_bass" => "Jorge",
  "base_guitar" => "Cliff",
  "drums" => "Joaquim",
];

echo "<p>{$acdc["vocal"]}</p>";
echo "<p>{$acdc["solo_guitar"]}</p>";
echo "<p>{$acdc["base_bass"]}</p>";
echo "<p>{$acdc["base_guitar"]}</p>";
echo "<p>{$acdc["drums"]}</p>";

$pearl = [
  "vocal" => "Phil",
  "solo_guitar" => "Mkey",
  "base_bass" => "Stone",
  "base_guitar" => "Jef",
  "drums" => "Jack",
];

$rock_bands = [
  "AC/DC" => $acdc,
  "Pearl Jam" => $pearl
];

var_dump($rock_bands);

echo "<p>{$rock_bands["AC/DC"]["vocal"]}</p>";

foreach ($acdc as $item) {
  echo "<p>{$item}</p>";
}