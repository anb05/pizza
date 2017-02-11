<?php
/**
 * The file is a Factory for create pizza
 *
 * PHP version 7.1
 *
 * @category Learn
 *
 * @package SimpleFactory\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza.git
 */

//namespace SimpleFactory\Models;

session_start();

require_once __DIR__ . "/../Generals/myHelper.php";

use SimpleFactory\Models\SimplePizzaFactory;

$pizza = new SimplePizzaFactory();
$item = $pizza->createPizza("Veggi");

echo "<br>SESSION: <br>\n";
var_dump($_SESSION);

echo "<br>pizza: <br>\n";
var_dump($item);
