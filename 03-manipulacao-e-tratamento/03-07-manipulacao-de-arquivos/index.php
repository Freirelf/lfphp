<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__ . "/file.txt";

if (file_exists($file) && is_file($file)) {
  echo "<p>O arquivo {$file} existe</p>";
} else {
  echo "<p>O arquivo {$file} não existe</p>";
}

/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);
if (!file_exists($file) || !is_file($file)) {
  $fileOpen = fopen($file, "w");
  fwrite($fileOpen, "Hello World" . PHP_EOL);
  fwrite($fileOpen, "Hello there" . PHP_EOL);
  fwrite($fileOpen, "Hello guys" . PHP_EOL);
  fwrite($fileOpen, "Hello team" . PHP_EOL);
  fclose($fileOpen);
} else {
  var_dump(
    file($file),
    pathinfo($file)
  );
};

echo "<p>", file($file)[3], "</p>";

$open = fopen($file, "r");
while (!feof($open)) {
  echo "<p>", fgets($open), "</p>";
}

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__ . "/file2.txt";
if(file_exists($getContents) && is_file($getContents)) {
  echo file_get_contents($getContents);
} else {
  $data = "<article><h1>Lucas</h1><p>LFSOlutions<br>lucas@gmail.com</p></article>";
  file_put_contents($getContents, $data);
  echo file_get_contents($getContents);
}

if (file_exists(__DIR__ . "/file3.txt") && is_file(__DIR__ . "/file3.txt")) {
  unlink(__DIR__ . "/file3.txt");
}