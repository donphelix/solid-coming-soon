<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 6:49 AM
 */


namespace App\Models\Languages;

class German extends \App\Providers\Person
{

    public function greet(): string
    {
        return 'Hallo!';
    }
}
