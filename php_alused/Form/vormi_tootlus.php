<?php
$nimi = $_GET;
$parool = $_GET;

echo '<pre>';
print_r($_GET);
echo '</pre>';
echo '<hr>';

echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<hr>';

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
echo '<hr>';

echo "<form action=\"http://peepsontauno.ikt.khk.ee/veeb_php/php_alused/Form/index.html\">";
echo '<input type="submit" name="Tagasi" value="Tagasi"><br>';