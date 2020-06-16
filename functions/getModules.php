<?php

function getModules($site)
{
    $conn = new Connection();
    try{
        $stmt = $conn->connect()->query(
        "SELECT module_name FROM modules WHERE site_id=(
            SELECT site_id FROM sites WHERE site_name='{$site}'
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