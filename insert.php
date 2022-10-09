<?php include "connect.php" ?>
<?php
    $sql = $pdo->prepare("INSERT INTO member VALUES(?,?,?,?,?,?)");
    $sql ->bindParam(1,$_POST["username"]);
    $sql ->bindParam(2,$_POST["password"]);
    $sql ->bindParam(3,$_POST["name"]);
    $sql ->bindParam(4,$_POST["address"]);
    $sql ->bindParam(5,$_POST["mobile"]);
    $sql ->bindParam(6,$_POST["email"]); 
    if($sql->execute())
        header("location: dbworkshop4.php?username=".$_POST["username"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
</body>
</html>