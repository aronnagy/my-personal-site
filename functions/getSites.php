<?php

function getSites()
{
    $conn = new Connection();
    try {
        $stmt = $conn->connect()->query(
            "SELECT site_name FROM sites"
        );
    } catch (PDOException $e) {
        print "The following error occured during query: " . $e->getMessage();
    }
    try {
        $query = $stmt->fetchAll();
    } catch (PDOException $e) {
        print "The following error occured during fetch: " . $e->getMessage();
    }
    for ($i = 0; $i < count($query); $i++) {
        $result[] = $query[$i]['site_name'] . " ";
    }
    return $result;
}
