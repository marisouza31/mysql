<?php 

define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'clientes');

try
{
    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname='. MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD,);
}catch(PDOException $e)
{
    echo 'Erro ao conectar com MySQL: ' . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sistema de Acesso ao Banco de Dados</title>
</head>
<body>
    
    <?php
    $sql = "SELECT * FROM `cadastro clientes`";
    $result = $PDO->query($sql);
    $rows = $result->fetchALL();

    for($i=0; $i < count($rows); $i++){ ?>
       nome: <?php echo $rows[$i]['nome']; ?><br>
       endreco: <?php echo $rows[$i]['endereco'];?><br>
       bairro: <?php echo $rows[$i]['bairro']; ?><br>
       cep: <?php echo $rows[$i]['cep']; ?><br>
       cidade: <?php echo $rows[$i]['cidade'];?><br>
       estado: <?php echo $rows[$i]['estado']; ?><br>
    <?php

    }

    ?>
</body>
</html>