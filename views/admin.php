<?php

$sites = require('core/db/Connection.php');

foreach($sites as $site)
{
    echo $site . "\n";
}