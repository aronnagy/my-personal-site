<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=aronnagy','root','');
} catch (PDOException $e) {
    print "The following error occured: " . $e->getMessage() . "<br/>";
    die();
}