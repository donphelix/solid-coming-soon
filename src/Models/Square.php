<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/11/22
 * Time: 7:52 AM
 */
namespace App\Models;

use App\Interfaces\ManageShapeInterface;
use App\Interfaces\ShapeInterface;

class Square implements ShapeInterface, ManageShapeInterface
{
    public int $length;

    /**
     * @param $length
     */
    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area(): float
    {
        return pow($this->length, 2);
    }

    public function calculate()
    {
        // TODO: Implement calculate() method.
    }
}
