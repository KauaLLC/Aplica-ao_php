<?php 

    require("template/header.php");
    
?>
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Painel Inicial</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Painel Inicial</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body fs-5 ">
                                    Produto : 
                                    <span class="fs-5">
                                    <?php
                                            $query = "SELECT COUNT(id) FROM produto;";
                                            $stmt = $conn->prepare($query);
                                            $stmt->execute();
                                            $result = $stmt->fetchColumn();
                                            echo $result;
                                        ?>
                                    </span>
                                </div>
                                
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="CRUDS/Produto/listarProduto.php">Ver Detalhes</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body fs-5">Funcionario</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="CRUDS/Funcionario/listarFuncionario.php">Ver Detalhes</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </main>
            <?php 
                require("template/footer.php");
            ?>