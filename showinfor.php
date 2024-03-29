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
    <table style =" border: 1px solid black">
    <tr style ="color:red">
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
  </tr>
    <?php
    foreach($resultSet as $row)
    {
    ?>
        <tr>
        <td><?php echo $row['productid']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['price']?></td>
        <td> 
            <button onclick="location.href='deleteProduct.php?id=<?php echo $row['productid'] ?>' "type="button">
            Delete
            </button>
        </td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>