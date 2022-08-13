<?php

use App\Configuration\DB\TimeSeriesConnection;
use App\Configuration\PasswordReminder;
use App\Models\Languages\English;
use App\Models\Languages\French;
use App\Models\Languages\German;
use App\Models\Languages\Swahili;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';

function greeting($people)
{
    foreach ($people as $person)
    {
        echo $person->greet();
    }
}

$people = [
    new English(),
    new German(),
    new French(),
    new Swahili()
];
greeting($people);
$password = new PasswordReminder(new TimeSeriesConnection());
echo $password->printMessage();
