<?php
/**
 * The file is a Front Controller
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

session_start();

require_once __DIR__ . "/../Generals/myHelper.php";

use SimpleFactory\Controllers\Order;

$order = new Order;
$order->fire();
