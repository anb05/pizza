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
     * This is preparing pizza
     *
     * @return string
     */
    public function prepare()
    {
        return "Готовится пицца";
    }

    /**
     * This is baking pizza
     *
     * @return string
     */
    public function bake()
    {
        return "Пицца печётся";
    }

    /**
     * This is cutting pizza
     *
     * @return string
     */
    public function cut()
    {
        return "Пицца нарезается";
    }

    /**
     * This is boxing pizza
     *
     * @return string
     */
    public function box()
    {
        return "Пицца нарезается";
    }
}