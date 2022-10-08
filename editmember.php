<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="./updatemember.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>">
        name : <input type="text" name="name" value="<?=$row["name"]?>"><br>
        password : <input type="text" name="password" value="<?=$row["password"]?>"><br>
        address : <br><textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
        mobile : <input type="text" name="mobile" pattern="[0-9][0-9]-[0-9][0-9][0-9][0-9]-[0-9][0-9][0-9][0-9]"
            value="<?=$row["mobile"]?>"><br>
        email : <input type="email" name="email" style="width: 250px;" value="<?=$row["email"]?>"><br>
        <input type="submit" value="แก้ไขข้อมูลสมาชิก">
    </form>
</body>

</html>