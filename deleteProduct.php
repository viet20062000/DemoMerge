<?php
    $db = parse_url(getenv("DATABASE_URL"));
    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
    ));    
    $id = $_POST["id"];
    $stmt =  
        $pdo->prepare("delete from product where id='$id'");	
    $stmt->execute($id);
    echo("insert ok!");
 
?>