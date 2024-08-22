
<?php 

require('../template/header.php')
?>
    
    <?php

    
    if (isset($_POST["nome"]) && isset($_POST["quantidade"]) && isset($_POST["preco"])){
        $query = "INSERT INTO produto (nome,quantidade, preco) VALUES (:nome, :quantidade, :preco);";
        

        $nome = $_POST["nome"];
        $quantidade = $_POST["quantidade"];
        $preco = $_POST["preco"];
        
        
        $stmt = $conn->prepare($query);
        $stmt->bindparam(":nome", $nome);
        $stmt->bindparam(":quantidade", $quantidade);
        $stmt->bindparam(":preco", $preco);
        $stmt->execute();
        
        echo'
                    <script>
                        window.location.replace("http://localhost/trabalho_ROKA/CRUDS/Produto/listarProduto.php?cad=trheeK");
                    </script>
                ';
       
                
    }    
        
        
        
        


    

   
    
    ?>



    <div class="container-fluid px-4">
        <h1 class="mt-4">Produto</h1>

        
    </div>
    <div style="margin: 2% 25% 2% 25%;">
        <div class="mt-2 mb-4">
            <h2 class="text-center">Cadastrar Produto</h2>
        </div>
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputNome" type="text" placeholder="Nome" name="nome" required>
                <label for="inputNome">Nome</label>
            </div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input class="form-control border-secondary bg-secondary" id="inputPreco" type="number" step=".01" placeholder="Preço" name="id" required readonly>
                    <label for="inputPreco">ID</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputQuantidade" type="number" placeholder="Quantidade" name="quantidade" required>
                        <label for="inputQuantidade">Quantidade</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPreco" type="number" step=".01" placeholder="Preço" name="preco" required>
                        <label for="inputPreco">Preço</label>
                    </div>
                </div>

            </div>
            <div class="mt-2 mb-4 text-center">
                
                <a class="btn btn-danger" href="listarProduto.php"> Cancelar </a>
                <?php
               
                echo'
                <a href="listarProdutoAlert.php">
                    <button class="btn btn-success" type="submit">
                        Salvar
                    </button>
                </a>';
                ?>
                
                
            </div>
        </form>
    </div>
    
<?php 
    require("../template/footer.php");
    
?>