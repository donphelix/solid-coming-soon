<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/11/22
 * Time: 4:31 PM
 */


namespace App\Models;

use App\Interfaces\ManageShapeInterface;
use App\Interfaces\ShapeInterface;
use App\Interfaces\ThreeDimensionalShapeInterface;

class Cuboid implements ShapeInterface, ThreeDimensionalShapeInterface, ManageShapeInterface
{
    private int $length;

    /**
     * @param $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }


    public function volume(): float
    {
        //Surface area * height
        return round(pow($this->length, 3), 2);
    }

    public function area(): float
    {
        return round(pow($this->length, 2) * 6, 2);
    }

    public function calculate()
    {
        // TODO: Implement calculate() method.
    }
}
