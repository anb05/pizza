<?php
/**
 * The file is a Fabrics for create pizza
 *
 * PHP version 7.1
 *
 * @category Learn
 *
 * @package SimpleFabric\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Pblic License>
 *
 * @link https://github.com/anb05/pizza.git
 */

namespace SimpleFabric\Models;

/**
 * Class PizzaStore is a clients of Fabrics
 *
 * @category Models
 *
 * @package SimpleFabric\Models
 *
 * @author anb05 <alexandr05@list.ru>
 *
 * @license <GNU Pblic License>
 *
 * @link https://github.com/anb05/pizza.git
 */
class PizzaStore
{
    /**
     * Link to object Fabrics
     *
     * @var SimplePizzaFactory $factory
     */
    protected $factory;

    /**
     * This is a construct
     *
     * @param SimplePizzaFactory $factory link to jbject Fabrics
     * 
     * @return void
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

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
?>
