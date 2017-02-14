<?php
/**
 * The file is a client of Factory for create pizza
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
class PizzaStore
{
    /**
     * Link to object Factory
     *
     * @var SimplePizzaFactory $factory
     */
    protected $factory;

    /**
     * This is a construct
     *
     * @param SimplePizzaFactory $factory link to object Factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * This is a handler order pizza
     *
     * @param string $pizzaType The type is of ordering pizza
     *
     * @return Pizza $pizza object Pizza
     */
    public function orderPizza(string $pizzaType): Pizza
    {
        $pizza = $this->factory->createPizza($pizzaType);

        $pizza->prepare()->bake()->cut()->box();

        return $pizza;
    }
}
?>
