<!-- cadastro -->
<?php

include './DB/tails_connect.php';

// var_dump($_POST);

if (isset($_POST['cadastrar'])){

$nome = $_POST ['nome'];
$sinopse = $_POST ['sinopse'];
$quant_vendas = $_POST ['quant_vendas'];
$valor = $_POST ['valor'];
$avaliacao = $_POST ['avaliacao'];
$data_lanca =  $_POST ['data_lanca'];
$produtora = $_POST ['produtora'];

$sql = "INSERT INTO eggman_nega (nome,sinopse,quant_vendas,valor,avaliacao,data_lanca,produtora) VALUES ('$nome','$sinopse','$quant_vendas','$valor','$avaliacao','$data_lanca','$produtora')";
$result = mysqli_query($conn,$sql);

if ($result){
    echo 'sonic te cadastrou';
}
else{
    die(mysqli_query($conn));
}

}

?>
