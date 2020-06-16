<?php

function getEntries($lang, $module)
{
    $conn = new Connection();
    try{
        $stmt = $conn->connect()->query(
        "SELECT text FROM {$lang} WHERE module_id=(
            SELECT module_id FROM modules WHERE module_name='{$module}'
        );"
        );
    } catch(PDOException $e)
    {
        print "The following error occured during query: " . $e->getMessage();
    }
    try
    {
        $query = $stmt->fetchAll();
    } catch(PDOException $e)
    {
        print "The following error occured during fetch: " . $e->getMessage();
    }
    return $query;
}