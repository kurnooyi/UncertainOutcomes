<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $dbconnect = new PDO("sqlsrv:server = tcp:cloucomputingserver.database.windows.net,1433; Database = footballDB", "ccadmin", "Cloud@computing");
    $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "ccadmin", "pwd" => "Cloud@computing", "Database" => "footballDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cloucomputingserver.database.windows.net,1433";
$dbconnect = sqlsrv_connect($serverName, $connectionInfo);
?>