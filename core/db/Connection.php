<?php

$config = (require 'config.php')['database'];

try {
    $db = new PDO(
        $config['connection'] . ';dbname=' . $config['name'],
        $config['username'],
        $config['password']
    );
} catch (PDOException $e) {
    print "The following error occured: " . $e->getMessage() . "<br/>";
    die();
}
