<?php
/**
 * The file have a abstract class from all Pizza
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
 * Class Pizza
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
abstract class Pizza
{
    /**
     * Status of pizza
     */
    public $pizzaStatus = [];

    /**
     * This is preparing pizza
     *
     * @return Pizza $this
     */
    public function prepare()
    {
        $this->pizzaStatus['prepare'] = "Пицца готовится";
        return $this;
    }

    /**
     * This is baking pizza
     *
     * @return Pizza $this
     */
    public function bake()
    {
        $this->pizzaStatus['bake'] = "Пицца печётся";
        return $this;
    }

    /**
     * This is cutting pizza
     *
     * @return Pizza $this
     */
    public function cut()
    {
        $this->pizzaStatus['cut'] = "Пицца нарезается";
        return $this;
    }

    /**
     * This is boxing pizza
     *
     * @return Pizza $this
     */
    public function box()
    {
        $this->pizzaStatus['box'] = "Пицца упаковывается";
        return $this;
    }
}