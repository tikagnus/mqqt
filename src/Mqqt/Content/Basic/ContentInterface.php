<?php
/**
 * Created by PhpStorm.
 * User: tikagnus
 * Date: 14/11/2017
 * Time: 20:31
 */

namespace Mqqt\Content\Basic;

/**
 * Interface ContentInterface
 * @package Mqqt\Content
 */
interface ContentInterface
{
    /**
     * @param string|array $items
     * @param int $increment
     * @return $this
     */
    public function push($items, int $increment = 1);

    /**
     * @return string
     */
    public function getContent();

    /**
     * @return int
     */
    public function getLength();

}