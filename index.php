<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanBlack</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .navbar{
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<?php 
include 'nav.php';
include 'cabecario.html';

include 'conexao.php';

$consulta = $cn->query('select * from vw_camisetas');
?>
<div class="container-fluid">
    <div class="row">
    <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-sm-3">
        <img src="imagens/<?php echo $exibe['ds_img']; ?>.jpg" class="img-responsive" style="width:100%;" alt="">
        <div><h4><b><?php echo mb_strimwidth($exibe['nm_camiseta'], 0,30,'...'); ?></b></h4></div>
        <div><h5>R$ <?php echo number_format($exibe['vl_preco'], 2,',','.'); ?></h5></div>
        </div>        
    <?php } ?>  
    </div>
</div>
<?php include 'rodape.html';?>
</body>
</html>