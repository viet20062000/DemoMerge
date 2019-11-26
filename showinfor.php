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
    <table style ="width:100%; border: 1px solid black">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
  </tr>
    <?php 
    foreach($resultSet as $row)
    {
        echo "<tr>" ."<td>". $row["productid"]."</td>".
        "<td>".$row["name"]."</td>".
        "<td>".$row["price"]."</td>"."</tr>";
    }
    ?>
    </table>
</body>
</html>