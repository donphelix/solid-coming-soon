<?php
/**
 * Created by PhpStorm.
 * User: don@donphelix.com
 * Date: 1/13/22
 * Time: 6:50 AM
 */


namespace App\Models\Languages;

use App\Providers\Person;

class French extends Person
{

    public function greet(): string
    {
        return 'Bonjour!';
    }
}
