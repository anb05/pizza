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

namespace SimpleFactory\Models;

//use SimpleFactory\Models\Pizza;

/**
 * Class PizzaStore is a clients of Factory
 *
 * @category Models
 *
 * @package SimpleFactory\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Public License>
 *
 * @link https://github.com/anb05/pizza.git
 */
class SimplePizzaFactory
{
    /**
     * This is a Factory to creating pizza
     *
     * @param string $pizzaType The type pizza to create
     *
     * @return Pizza | bool $pizza
     */
    public function createPizza(string $pizzaType)
    {
        try {
            $type = mb_convert_case($pizzaType, MB_CASE_TITLE) . "Pizza";
            $pizza = new $type();
            if (!empty($_SESSION['errorPizza'])) {
                unset($_SESSION['errorPizza']);
            }
            return $pizza;
        } catch (\Throwable $e) {
            $_SESSION['errorPizza'] = "Такой пиццы нет в асортименте!";
        }
        return false;
    }
}
