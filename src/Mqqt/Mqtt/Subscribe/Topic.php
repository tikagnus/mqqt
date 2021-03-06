<?php
/**
 * Created by PhpStorm.
 * User: tikagnus
 * Date: 15/11/2017
 * Time: 21:37
 */

namespace Mqqt\Mqtt\Subscribe;


/**
 * Class Topic
 * @package Mqqt\Mqtt\Subscribe
 */
class Topic extends \Mqqt\Mqtt\Publish\Topic
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $qos = 0;
    /**
     * @var Callable
     */
    protected $callable;

    /**
     * Topic constructor.
     * @param string $name
     * @param int $qos
     * @param Callable $callable
     */
    public function __construct(string $name, int $qos = 0, Callable $callable = null)
    {
        parent::__construct($name, $qos);
        $this->callable = $callable;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function qos()
    {
        return $this->qos;
    }

    /**
     * @return callable
     */
    public function callable()
    {
        return $this->callable;
    }

}