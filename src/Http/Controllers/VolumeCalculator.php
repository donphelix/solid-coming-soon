<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/11/22
 * Time: 4:21 PM
 */


namespace App\Http\Controllers;

class VolumeCalculator extends AreaCalculator
{
    public function construct($shapes = [])
    {
        parent::construct($shapes);
    }

    public function sum() : float
    {
        $volumes = [];
        foreach ($this->shapes as $shape)
        {
            if( method_exists($shape, 'volume'))
                $volumes[] = $shape->volume();
        }
        return array_sum($volumes);
    }
}
