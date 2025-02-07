<!-- delete -->
<?php

include './DB/tails_connect.php';

$timestones = $_GET ['id'];

echo "receba : " .$timestones;

if(isset($_GET['id'])){

    $timestones =  $_GET['id'];

    $sql = "DELETE FROM eggman_nega WHERE id = $timestones ";
    $result = mysqli_query($conn,$sql);

    if ($result){
        header('location: vector.php');
    }else{
        echo '<script> alert ("deu ruim!") </script>';
    }
}

?>