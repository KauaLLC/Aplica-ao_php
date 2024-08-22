    <?php 
        require('../template/header.php')
    ?>
    
    <?php
        
        $idproduto = $_GET['id'];
        $nomeprod = $_GET['nome'];    
        $quantidadeprod = $_GET['quantidade'];
        $precoprod = $_GET['preco'];

        if (isset($_POST["nome"]) && isset($_POST["quantidade"]) && isset($_POST["preco"])){
                $query = "UPDATE produto SET nome = :nome, quantidade = :quantidade, preco = :preco WHERE produto . id = $idproduto;";

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
                        window.location.replace("http://localhost/trabalho_ROKA/CRUDS/Produto/listarProduto.php?edit=two");
                    </script>
                ';
                
            }
        ?>
        



    <div class="container-fluid px-4">
        <h1 class="mt-4">Produto</h1>

        
    </div>
    <div style="margin: 2% 25% 2% 25%;">
        <div class="mt-2 mb-4">
            <h2 class="text-center">Editar Produto</h2>
        </div>
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" id="inputNome" type="text"  name="nome" value="<?php echo $nomeprod ?>" required>
                <label for="inputNome">Nome</label>
            </div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input class="form-control border-secondary bg-secondary " id="inputid" type="number" step=".01" placeholder="" name="id" value="<?php echo $idproduto; ?>" required readonly>
                    <label for="inputid">
                        ID
                    </label>
                    
                    
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputQuantidade" type="number" placeholder="Quantidade" name="quantidade" value="<?php echo $quantidadeprod ?>" required>
                        <label for="inputQuantidade">Quantidade</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPreco" type="number" step=".01" placeholder="Preço" name="preco" required value="<?php echo $precoprod ?>">
                        <label for="inputPreco">Preço</label>
                    </div>
                </div>

            </div>
            <div class="mt-2 mb-4 text-center">
                <!-- <button class="btn btn-primary" type="submit"> <a href="../index.html">Create
                                            Account</a></button> -->
                <a class="btn btn-danger" href="ListarProduto.php"> Cancelar </a>
                <button class="btn btn-success" type="submit"> Salvar </button>
            </div>
        </form>
    </div>
    <?php 
        require("../template/footer.php");
    ?>
