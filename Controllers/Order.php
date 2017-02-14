<?php
/**
 * The file have a class with main logic application
 *
 * PHP version 7.1
 *
 * @category Learn
 *
 * @package SimpleFactory\Controllers
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza.git
 */

namespace SimpleFactory\Controllers;

use SimpleFactory\Models\PizzaStore;
use SimpleFactory\Models\SimplePizzaFactory;

/**
 * Class Order
 *
 * @category Models
 *
 * @package SimpleFactory\Controllers
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza.git
 */
class Order
{
    private $view = null;

    public function __construct()
    {
        $this->view = __DIR__ . "/../public/views/index.html";
    }

    public function fire()
    {
        if (!empty($_POST['pizza'])) {
            $factory = new SimplePizzaFactory();
            $store   = new PizzaStore($factory);
            $pizza   = $store->orderPizza($_POST['pizza']);

            foreach ($pizza->pizzaStatus as $statusKey=>$statusValue) {
                switch ($statusKey) {
                    case "prepare" :
                        $preparation = $statusValue;
                        break;

                    case "bake" :
                        $baker       = $statusValue;
                        break;

                    case "cut" :
                        $cut         = $statusValue;
                        break;

                    case "box" :
                        $box         = $statusValue;
                        break;
                }
            }

            $status      = "Можете забирать пиццу с " . $_POST['pizza'];
        } else if (!empty($_SESSION['errorPizza'])) {
            $status = $_SESSION['errorPizza'];
        } else {
            $status = "Выбирите пиццу!";
        }
        require_once $this->view;
    }
}