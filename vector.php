<!-- listar -->
<?php

    include './DB/tails_connect.php';
    $sql = 'SELECT * FROM eggman_nega';
    $result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/silver.css">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="menu_listar">
    
   <header class="cabecario_listar">
        <ul>
            <li>
                <button class="btn-cadastrar">
                  <a href="shadow.php"> Cadastrar </a>
                </button> 
            </li>
            <li>
                <button class="btn-listar">
                   <a href="vector.php"> Listar </a>
               </button>
            </li>
        </ul>
    </header>

    <h1 class="py-5 mx-5">Jogos Cadastrados</h1>
    <div>
      
        <table  class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Sinopse</td>
                <td>qtd_Vendas</td>
                <td>Valor</td>
                <td>Avaliaçao</td>
                <td>Data</td>
                <td>Produtora</td>
            </tr>
 <?php
                if($result){
                    while($linha = mysqli_fetch_assoc($result)){
                        
                        $id = $linha['id'];
                        $nome = $linha['nome'];
                        $sinopse = $linha['sinopse'];
                        $quant_vendas = $linha['quant_vendas'];
                        $valor = $linha['valor'];
                        $avalicao = $linha [ 'valor'];
                        $data_lanca = $linha ['data_lanca'];
                        $produtora = $linha [ 'produtora'];

                    
                        echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$nome.'</td>
                                <td>'.$sinopse.'</td>
                                <td>'.$quant_vendas.'</td>
                                <td>'.$valor.'</td>
                                <td>'.$avalicao.'</td> 
                                <td>'.$data_lanca.'</td>
                                <td>'.$produtora.'</td>
                                <td> <a href= "infinite.php?id= '.$id.' "> Editar </a> </td>
                                <td> <a href= "sonic.exe.php?id= '.$id.' "> Excluir </a> </td>
                            </tr>               
                            ';
                    }
                }

            
 ?>
        </table>
    </div>
   

</body>
</html>
