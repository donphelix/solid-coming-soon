<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 7:24 AM
 */


namespace App\Configuration\DB;

use App\Configuration\DBConnectionInterface;

class TimeSeriesConnection implements DBConnectionInterface
{

    /**
     * @return string
     */
    public function connect(): string
    {
        // handle the database connection
        return "Time Series Connection";
    }
}
