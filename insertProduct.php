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
$name =$_POST['name'];
$price =$_POST['price'];
$data = [
    'name'=>$name,
    'price'=>$price,
];
$sql ="insert into product (name, price) values (:name,:price)");
//compile
$stmt = $pdo->prepare($sql);
//execute
$stmt->execute($data);
echo("insert ok!");
?>