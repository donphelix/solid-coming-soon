<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/11/22
 * Time: 7:53 AM
 */


namespace App\Models;

use App\Interfaces\ShapeInterface;

class Circle implements ShapeInterface
{
    public int $radius;

    /**
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }

}
