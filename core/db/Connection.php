<?php

class Connection
{
    function connect()
    {
        $config = (require 'config.php')['database'];
        
        return new PDO(
            $config['connection'] . ';dbname=' . $config['name'],
            $config['username'],
            $config['password']
        );
    }
}