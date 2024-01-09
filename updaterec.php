<?php
$dblink=
"db4free.net";
$db= "db4free123ab";
$port: 3306;

try {
    $conn = new PDO("mysql:host= $dblink, $db, $port");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE fruits SET fullname='John Doe' WHERE amt>3500";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>