<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");
$test = true;

if($test) {
  var_dump(true);
} else {
  var_dump(false);
}

$age = 51;
if($age < 18) {
  var_dump( "bandas colorias");
} elseif($age > 20 && $age < 50) {
  var_dump( "ótimas bandas");
}
else {
  var_dump( "rock and roll");
}

$hour = 3;
if($hour < 12) {
  var_dump("bom dia");
} elseif($hour < 18) {
  var_dump("boa tarde");
} else {
  var_dump("boa noite");
}
/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);
$rock ="";

if(isset($rock)) {
  var_dump("rock and roll");
} else {
  var_dump("die");
}

$rockAndRoll = "nirvana";

if(!empty($rockAndRoll)) {
  var_dump("esta tocando {$rockAndRoll}");
} else {
  var_dump("não esta tocando nada");
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);


/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "past_due";

switch($payment) {
  case "billet_printed":
    var_dump("boleto impresso");
    break;
  case "cancelled":
    var_dump("cancelado");
    break;
  case "past_due":
  case "pending":
    var_dump("aguardando pagamento");
    break;
  case "approved":
  case "completed":
    var_dump("pagamento aprovado");
    break;
  default:
    var_dump("nao identificado");
    break;
}

