<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$DB = 'crud_beta';


$conn = new mysqli($hostname,$username,$password,$DB);

if(!$conn){
    echo 'erro ao conectar,faz o L';
}
else{
    echo 'Deu Bão!!';
}
?>