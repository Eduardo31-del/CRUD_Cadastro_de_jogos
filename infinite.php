<!-- editar -->
<?php
    //p-1 conecta ao banco
    include './DB/tails_connect.php';

    if(isset($_GET['id'])){
        //p-2 recebe id via get
        $timestones = $_GET['id'];

        //p-3 seleciona o cliente pelo id
        $sql =  "SELECT * FROM eggman_nega WHERE id = $timestones ";

        //receber o resultado do banco
        $result = mysqli_query($conn,$sql);

        //converte o  objeto em array
        $Tom = mysqli_fetch_assoc($result);

        //var_dump($result);

    }
    if(isset($_POST['editar'])){

        $nome = $_POST['nome'];    
        $sinopse = $_POST['sinopse'];   
        $quant_vendas = $_POST['quant_vendas'];
        $valor = $_POST['valor'];
        $avaliacao = $_POST [ 'avaliacao'];
        $data_lanca = $_POST ['data_lanca'];
        $produtora = $_POST ['produtora'];

        $sql_update = "UPDATE eggman_nega SET nome = '$nome',sinopse='$sinopse',quant_vendas= '$quant_vendas',valor = '$valor',avaliacao = '$avaliacao', data_lanca ='$data_lanca',produtora = '$produtora' WHERE id = $timestones";

        $result_update = mysqli_query($conn,$sql_update);

        if($result_update){
            echo ' <script> alert("cliente atualizado com sucesso!!") </script> ';
        }
    } 
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/blaze.css">
</head>
<body class="menu_editar">
   <header class="cabecario_editar">
        <ul>
            <li>
                <button class="btn-cadastrar-editar">
                  <a href="shadow.php"> Cadastrar </a>
                </button> 
            </li>
            <li>
                <button class="btn-listar-editar">
                   <a href="vector.php"> Listar </a>
               </button>
            </li>
            <li class="texto-maneiro">
                <h1>Editar </h1>
            </li>
        </ul>
    </header>

    <!-- <h1>Editar </h1> -->
    <div class="amy20">
       <div class="iblis20">
            <form method="POST" action="sonic.php">
                <div class="odio20">
                    <input type="text" name="nome" id="nome" value = <?php echo $Tom['nome'];?>>
                    <span class= "mecha-sonic">Nome</span>
                </div>
                <br>
                <div class="odio20">
                    <input type="text" name="sinopse" id="sinopse" value = <?php echo $Tom['sinopse'];?>>
                    <span class= "mecha-sonic">sinopse</span>
                </div>
                <br>
                <div class="odio20">
                    <input type="text" name="quant_vendas" id="quant_vendas" value = <?php echo $Tom['quant_vendas'];?>>
                    <span class= "mecha-sonic">Q_Vendas</span>
                </div>
                <br>
                <div class="odio20">
                    <input type="text" name="valor" id="valor" value = <?php echo $Tom['valor'];?>>
                    <span class= "mecha-sonic">Valor</span>
                </div>
                <br>
                <div class="odio20">
                    <input type="text" name="avaliacao" id="avaliacao" value = <?php echo $Tom['avaliacao'];?>>
                    <span class= "mecha-sonic">Avaliaçao</span>
                </div>
                <br>
                <div class="odio20">
                    <input type="text" name="data_lanca" id="data_lanca" value = <?php echo $Tom['data_lanca'];?>>
                    <span class= "mecha-sonic">Data</span>
                </div>
                <br>
                <div class="odio20">
                    <input type="text" name="produtora" id="produtora" value = <?php echo $Tom['produtora'];?>>
                    <span class= "mecha-sonic">Produtora</span>
                </div>
                <br>
                <button class="omega20">
                    <input type="submit" name="editar" id="bot" value="editar">
                </button>
            </form>
        </div>
    </div>
</body>
</html>