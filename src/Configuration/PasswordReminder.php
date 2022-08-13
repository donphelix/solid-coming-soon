<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 6:38 AM
 */


namespace App\Configuration;

class PasswordReminder
{
    private DBConnectionInterface $dbConnection;

    /**
     * @param DBConnectionInterface $dbConnection
     */
    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function printMessage()
    {
        return $this->dbConnection->connect();
    }

}
