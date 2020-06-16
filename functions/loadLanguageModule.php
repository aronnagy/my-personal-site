<?php

/**
 * Performs a query on the site's database to get dynamic language content.right
 * 
 * @param string $language -the preferred language
 * @param string $module_name -the given site's text module
 * @param PDO $pdo -our database with connection
 * 
 * @throws PDOException If something goes wrong with the database
 * @author Aron Nagy <aron.nagy.1997@gmail.com>
 * @return string //the text module's content in the given language
 * 
 */

function loadLanguageModule($language, $module_name)
{
    $conn = new Connection();
    try{
        $stmt = $conn->connect()->query("SELECT text 
                        FROM {$language}
                        INNER JOIN modules
                        ON {$language}.module_id = modules.module_id 
                        WHERE modules.module_id=
                        (SELECT modules.module_id
                        FROM modules
                        WHERE modules.module_name='{$module_name}');
                        ;");
    } catch(PDOException $e)
    {
        print "The following error occured during query: " . $e->getMessage();
    }

    try
    {
        $query = $stmt->fetch();
    } catch(PDOException $e)
    {
        print "The following error occured during fetch: " . $e->getMessage();
    }
    return $query[0];
}