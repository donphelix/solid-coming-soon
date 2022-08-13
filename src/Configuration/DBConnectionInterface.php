<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 6:37 AM
 */


namespace App\Configuration;

interface DBConnectionInterface
{
    public function connect();
}
