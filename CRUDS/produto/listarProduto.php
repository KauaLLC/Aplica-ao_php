<?php 
require('../template/header.php');

?>

    
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Produto</h1>

                        <div class= "d-flex justify-content-between">
                            <h2>
                                <a href="listarProduto.php" style="text-decoration: none; font-size: 2rem">
                                    Produto:
                                </a>
                                
                                <span>
                                        <?php
                                            $query = "SELECT COUNT(id) FROM produto";
                                            
                                            $stmt = $conn->prepare($query);
                                            
                                            $stmt->execute();
                                            $result = $stmt->fetchColumn();
                                            echo $result;
                                        ?>
                                </span>
                            </h2>
                            <a href="Cadastrar_produto.php" class="btn btn-lg btn-success">
                                Cadastrar
                            </a>
                        </div>
                    
                
                    
                        <?php
                        


                        $query = "SELECT * FROM produto";
                        $stmt = $conn->prepare($query);
                        
                        $stmt->execute();
                        $produtos = $stmt->fetchAll();

                        if($produtos){
                            $sql = "SELECT * FROM produto ORDER BY produto . id ASC"; 
                            $stmt = $conn->prepare($sql);
                            
                            $stmt->execute();
                            $produtos = $stmt->fetchAll();

                        if(isset($_GET["del"])){
                            echo'
                            <div class="d-flex justify-content-center">
                                <div class=" mt-5 alert alert-warning text-center alert-dismissible  w-25  fade show" role="alert">
                                    <strong>
                                        Dados Apagados
                                    </strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            ';
                        };  
                        if(isset($_GET["edit"])){
                            echo'
                            <div class="d-flex justify-content-center">
                                <div class=" mt-5 alert alert-warning text-center alert-dismissible  w-25  fade show" role="alert">
                                    <strong>
                                        Dados Salvos
                                    </strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            ';
                        };  
                        if(isset($_GET["cad"])){
                            echo'
                            <div class="d-flex justify-content-center">
                                <div class=" mt-5 alert alert-warning text-center alert-dismissible  w-25  fade show" role="alert">
                                    <strong>
                                        Dados Cadastrado
                                    </strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            ';
                        };  
                            

                            echo'
                            <div class="table-responsive mt-2">
                               
                                <table class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Quantidade
                                            </th>
                                            <th>
                                                Preço
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>';

                            foreach($produtos as $produto){
                            echo"<tbody> <tr>";
                            echo "<td>".$produto["id"]."</td>";
                            echo "<td>".$produto["nome"]."</td>";
                            echo "<td>".$produto["quantidade"]."</td>";
                            echo "<td> $".$produto["preco"]."</td>";
                            echo '<td>
                                    <a href="Editar_produto.php?id=' . $produto["id"] . '&nome='. $produto["nome"] . '&quantidade='. $produto["quantidade"] . '&preco='. $produto["preco"] . ' " class="btn btn-warning">Editar</a>
                                    <a href="Deletar_produto.php?id=' . $produto["id"] . ' " >
                                        
                                    <a href="javascript:void(0);" onclick="confirmDelete('. $produto["id"] . ');" class="btn btn-danger">
                               Deletar
                           </a>
 
                                </td>';

                                
                            
                            }
                        }else{
                            echo'
                            <div class="table-responsive mt-2">
                                <table class="table table-striped table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Quantidade
                                            </th>
                                            <th>
                                                Preço
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="mt-1 fs-1 text-center card-body alert alert-danger">
                                Nenhum produto cadastrado
                            </div>
                            ';
                        }
                        
                        ?> 
                                
                            </tbody>
                        </table>
                                        
                                    
                                
                    </div>
                       
                    
                </main>
                <script>
                function confirmDelete(productId) {
                    var confirmDelete = confirm("Tem certeza de que deseja remover este produto?");

                    if (confirmDelete) {
                        // Se o usuário confirmar, redirecione para a página de exclusão
                        window.location.href = "Deletar_produto.php?id=" + productId;
                    }
                    // Se o usuário cancelar, nada acontece
                }
                </script>
<?php
    require('../template/footer.php')
?>
