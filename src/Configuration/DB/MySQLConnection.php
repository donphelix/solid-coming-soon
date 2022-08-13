<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 6:38 AM
 */


namespace App\Configuration\DB;

use App\Configuration\DBConnectionInterface;

class MySQLConnection implements DBConnectionInterface
{

    public function connect(): string
    {
        // handle the database connection
        return "Mysql Connection";
    }
}
