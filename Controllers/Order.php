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
            $pizza = new SimplePizzaFactory();
            $item = $pizza->createPizza($_POST['pizza']);
            $preparation = $item->prepare();
            $baker       = $item->bake();
            $cut         = $item->cut();
            $box         = $item->box();
            $status      = "Можете забирать пиццу с " . $_POST['pizza'];
        } else if (!empty($_SESSION['errorPizza'])) {
            $status = $_SESSION['errorPizza'];
        } else {
            $status = "Выбирите пиццу!";
        }
        require_once $this->view;
    }

}