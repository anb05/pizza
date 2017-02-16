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

declare(strict_types=1);

namespace SimpleFactory\Models;

/**
 * Class SimplePizzaFactory
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
    public function createPizza(string $pizzaType) : Pizza
    {
        try {
            $type = __NAMESPACE__ . "\\" . mb_convert_case($pizzaType, MB_CASE_TITLE) . "Pizza";
            $pizza = new $type();
            if (!empty($_SESSION['errorPizza'])) {
                unset($_SESSION['errorPizza']);
            }
            return $pizza;
        } catch (\Throwable $e) { // Так делать нельзя!!!!!!
            $_SESSION['errorPizza'] = "Такой пиццы нет в асортименте!";
        }
        return false;
    }
}
