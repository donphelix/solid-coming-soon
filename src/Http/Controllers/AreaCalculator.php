<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/11/22
 * Time: 7:53 AM
 */


namespace App\Http\Controllers;

/**
 * @method construct(array $shapes)
 */
class AreaCalculator
{
    protected array $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum(): float
    {
        $area = [];
        foreach ($this->shapes as $shape) {
            $area[] = $shape->area();
        }

        return round(array_sum($area), 2);
    }
}
