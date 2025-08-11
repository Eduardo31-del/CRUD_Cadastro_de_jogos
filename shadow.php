<!-- index -->
<?php

    include './DB/tails_connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/mephiles.css">
</head>
<body class="menu_cadastrar">
   <header class="cabecario_cadastrar">
        <ul>
            <li>
                <button class= "btn_cadastrar_principal">
                   <a href="shadow.php"> Cadastrar </a>
                </button> 
            </li>
            <li>
                <button class="btn_listar_principal">
                   <a href="vector.php"> Listar </a>
               </button>
            </li>
            <li class="texto-da-hora">
               <h1>Cadastro </h1>
            </li>
        </ul>
    </header>

    <!-- <h1>Cadastro de Jogos do SONIC </h1> -->
    <div class="amy">
       <div class="iblis">
            <form method="POST" action="sonic.php">
                <div class="odio">
                    <input type="text" name="nome" id="nome" placeholder="Digite o nome do jogo do sonic">
                    <span class= "metal-sonic">Nome:</span>
                </div>
                <br>
                <div class="odio">
                    <input type="text" name="sinopse" id="sinopse" placeholder="Escreva a sinopse">
                    <span class= "metal-sonic">Sinopse:</span>
                </div>
                <br>
                <div class="odio">
                    <input type="text" name="quant_vendas" id="quant_vendas" placeholder="Digite a quantidade de vendas">
                    <span class= "metal-sonic">Quant_vendas:</span>
                </div>
                <br>
                <div class="odio">
                    <input type="text" name="valor" id="valor" placeholder="Coloque o valor">
                    <span class= "metal-sonic">Valor:</span>
                </div>
                <br>
                <div class="odio">
                    <input type="text" name="avaliacao" id="avaliacao" placeholder="Deixe sua avaliaçao">
                    <span class= "metal-sonic">Avaliação:</span>
                </div>
                <br>
                <div class="odio">
                    <input type="text" name="data_lanca" id="data_lanca" placeholder="Data de lançamento">
                    <span class= "metal-sonic">Data de lançamento:</span>
                </div>
                <br>
                <div class="odio">
                    <input type="text" name="produtora" id="produtora" placeholder="Coloque a produtora do jogo">
                    <span class= "metal-sonic">Produtora:</span>
                </div>
                <br>
                <button class="omega">
                    <input type="submit" name="cadastrar" id="bot" value="cadastrar">
                </button>
            </form>
        </div>
    </div>
</body>
</html>
