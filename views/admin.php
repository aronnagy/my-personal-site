<?php

require('functions/getSites.php');
require('functions/getModules.php');

foreach(getSites() as $site)
{
    echo $site . "contains: <br>";
    foreach(getModules($site) as $module)
    {
        echo "-" . $module[0] . "<br>";
    }
}