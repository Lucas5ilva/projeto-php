<?php
include 'conn.php'; 

$id=$_GET['id'];
$sql="SELECT NOME_BANDAS FROM BANDAS WHERE ID_BANDAS =$id";
$result=$conn->query($sql);
$dados=$result->fetch_assoc();
$nome=$dados['NOME_BANDAS'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="update.php" method="post">
<label for="">Nome da banda</label>
<input type="" name="band" value="<?php echo $nome?>"><br>
<input type="submit" name="band" value="alterar"<?php echo $nome?>"><br>

</form>    
</body>
</html>



