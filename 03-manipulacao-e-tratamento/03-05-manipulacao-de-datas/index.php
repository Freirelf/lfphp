<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);
var_dump([
  date_default_timezone_get(),
  date(DATE_W3C),
  date("d/m/Y H:i:s"),
  date("d/m/Y H:i:s", strtotime("2000-01-01 00:00:00"))
]);

define("DATE_BR", "d/m/Y H:i:s");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
  date_default_timezone_get(),
  date(DATE_BR),
]);

var_dump(getdate());

echo "<p> hoje é dia ", getdate()["mday"], " de ", getdate()["month"], " de ", getdate()["year"], "</p>";

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([
  "strtotime NOW" => strtotime("now"),
  "time" => time(),
  "strtotime+10d" => strtotime("+10days"),
  "date DATE_BR" => date(DATE_BR),
  "date +10days" => date(DATE_BR, strtotime("+10days")),
  "date -10days" => date(DATE_BR, strtotime("-10days")),
  "date +1years" => date(DATE_BR, strtotime("+1year")),
]);

$format = "%d/%m/%Y %Hh%M minutos";
echo "<p> A data de hoje é ", strftime($format),  "</p>";
