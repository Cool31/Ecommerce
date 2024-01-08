<?php
$dblink=
"db4free.net";
$db= "db4free123ab";
$port: 3306;

//testing crud operations
try {
    $conn = new PDO("mysql:host=$dblink, dbname=$db, $port");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM fruits WHERE fullname='?'";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>


