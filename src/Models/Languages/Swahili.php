<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 6:56 AM
 */


namespace App\Models\Languages;

class Swahili extends \App\Providers\Person
{

    public function greet(): string
    {
        return "Mambo!";
    }
}
