<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
    $sql ="Select * from product";
    //compile
    $stmt = $pdo->prepare($sql);
    //execute
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet=$stmt->fetchAll();
    ?>
    <ul>
    <?php 
    foreach($resultSet as $row)
    {
        echo "<li>" . $row["name"].'--'.$row["price"]."</li>";
    }
    ?>
    <li></li>
    </ul>
</body>
</html>