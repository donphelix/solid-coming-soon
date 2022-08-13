<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/11/22
 * Time: 3:33 PM
 */


namespace App\Http\Controllers;

class SumCalculatorOutput
{
    protected AreaCalculator $calculator;

    /**
     * @param AreaCalculator $calculator
     */
    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON()
    {
        $data = [
            'sum' => $this->calculator->sum(),
        ];

        return json_encode($data);
    }

    public function HTML(): string
    {
        return implode('', [
            "",
            'Sum of the areas of provided shapes: ',
            $this->calculator->sum(),
        ]);
    }
}
