
<?php 
session_start();
// conexão com o banco de dados
require('../dataBase/dbconfig.php');

// pega as as informações via post e atribui a uma variavel 
$login = $_POST["login"];
$senha = $_POST["senha"];


$query = "SELECT * FROM usuario WHERE login = :login AND senha = :senha;";
$stmt = $conn->prepare($query);
$stmt->bindParam(":login",$login);
$stmt->bindParam(":senha",$senha);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


// se tem um resultado, faça...
if($result){
    $_SESSION["user"] = $login;
    header('Location: ../index.php');
}else{
    header('Location: loginFormError.php');
    
}




?>
