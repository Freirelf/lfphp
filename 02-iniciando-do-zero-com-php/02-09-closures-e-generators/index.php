<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);
$myAge = function($year) {
  $age = date("Y") - $year;
  return "<h5> Você tem $age anos</h5>";
};

echo $myAge(2000);

$priceBrl = function($price) {
  return number_format($price, 2, ",", ".");
};

echo "<p>O preço do projeto custa R$ {$priceBrl(1000)}</p>";

$myCart =[];
$myCart["totalPrice"] = 0;

$cardAdd = function($item, $qtd, $price) use (&$myCart) {
  $myCart[$item] = $qtd * $price;
  $myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("notebook", 1, 5000);
$cardAdd("smartphone", 1, 10000);
$cardAdd("mouse", 1, 100);
$cardAdd("monitor", 1, 1500);

var_dump($myCart);

echo "<p>O preço total da compra é R$ {$priceBrl($myCart["totalPrice"])}</p>";

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 400;

function showDates($days) {
  $saveDate = [];
  for($day = 1; $day < $days; $day++) {
    $saveDate[] = date("d/m/Y", strtotime("+$day days"));
  }
  return $saveDate;
}

echo "<div style='text-align: center'>";
foreach(showDates(0) as $date) {
  echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";

function generatorDate($days) {
  for($day = 1; $day < $days; $day++) {
    yield date("d/m/Y", strtotime("+$day days"));
  }
}

echo "<div style='text-align: center'>";
foreach(generatorDate($iterator) as $date) {
  echo "<small class='tag'>{$date}</small>";
}
echo "</div>";