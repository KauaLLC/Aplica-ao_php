<?php 
require('../../dataBase/dbconfig.php');

?>

<?php 
    $idproduto = $_GET['id'];
    $query = "DELETE FROM produto WHERE produto . id = $idproduto";
    $stmt = $conn->prepare($query);
    $stmt->execute();
            

header('location: ListarProduto.php?del=one');
die();

?>