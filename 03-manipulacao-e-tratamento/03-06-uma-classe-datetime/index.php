<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.06 - Uma classe DateTime");

/*
 * [ DateTime ] http://php.net/manual/en/class.datetime.php
 */
fullStackPHPClassSession("A classe DateTime", __LINE__);
define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateBirth = new DateTime("1997-03-14");
$dateStatic = DateTime::createFromFormat("d/m/Y", "1999-06-12");

var_dump([
  $dateNow,
  $dateBirth,
  $dateStatic
]);

var_dump([
  $dateNow->format(DATE_BR),
  $dateNow->format("d")
]);

echo "<p>hoje é dia ", $dateNow->format("d"), " de ", $dateNow->format("m"), " de ", $dateNow->format("Y"), "</p>";

/*
 * [ DateInterval ] http://php.net/manual/en/class.dateinterval.php
 * [ interval_spec ] http://php.net/manual/en/dateinterval.construct.php
 */
fullStackPHPClassSession("A classe DateInterval", __LINE__);

$dateInterval = new DateInterval("P10Y2MT10M");
var_dump($dateInterval);

$dateTime = new DateTime("now");
// $dateTime->add($dateInterval);
$dateTime->sub($dateInterval);
var_dump($dateTime);

// $birth = new DateTime(date("Y") . "-03-14");
// $dateNow = new DateTime("now");

$birth = new DateTime("1997-03-14");
$dateNow = new DateTime("now");

$diff = $dateNow->diff($birth);

var_dump($birth, $diff);

if ($diff->invert){
  echo "<p> Seu aniversário é em {$diff->days} dias </p>";
} else {
  echo "<p>Faltam {$diff->days} para  Seu aniversário </p>";
}

$dateResources = new DateTime("now");
var_dump([
  $dateResources->format(DATE_BR),
  $dateResources->sub(DateInterval::createFromDateString("10days"))->format(DATE_BR),
  $dateResources->add(DateInterval::createFromDateString("20days"))->format(DATE_BR)
]);


/**
 * [ DatePeriod ] http://php.net/manual/pt_BR/class.dateperiod.php
 */
fullStackPHPClassSession("A classe DatePeriod", __LINE__);

$start = new DateTime("now");
$interval = new DateInterval("P1M");
$end = new DateTime("2020-12-31");

$period = new DatePeriod($start, $interval, $end);

var_dump([
  $start->format(DATE_BR),
  $interval,
  $end->format(DATE_BR),
], $period, get_class_methods($period));