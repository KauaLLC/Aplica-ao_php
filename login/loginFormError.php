<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Sistema WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>

<body class="bg-gray-200">
    <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Atenção:</strong> Senha ou login incorretos.
         <a href="loginForm.php">
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </a>
  </div>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 teste">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">
                                        Área de Acesso
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input id="login" class="form-control" id="inputEmail" name="login" type="text"  placeholder="name@example.com" required />
                                            <label for="inputEmail">Usuário</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id="senha" class="form-control" id="inputPassword" name="senha" type="password"  placeholder="Password" required />
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input id="show" class="form-check-input" type="checkbox" onclick="mostrar()" value="" />
                                            <label class="form-check-label pass-disable-text" for="show">Mostrar
                                                Senha</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="#">Esqueci a minha senha</a>
                                            <button type="submit" class="btn btn-primary">
                                                Entrar
                                            </button>
                                            <!-- <a class="btn btn-primary" href="index.html">Entrar</a> -->
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div>
                                        <a href="loginCadas.php">Cadastrar uma conta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            Copyright &copy; hugonbr 2022
                        </div>
                        <div>
                            <a href="#">Política de Privacidade</a>
                            &middot;
                            <a href="#">Termos &amp; Condições</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script>
        /*!
 * Start Bootstrap - SB Admin v7.0.4 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2021 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
//
// Scripts
//

let login, senha;
let elem = document.documentElement;

text_button = document.getElementById("show");

window.addEventListener("DOMContentLoaded", (event) => {
    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector("#sidebarToggle");
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener("click", (event) => {
            event.preventDefault();
            document.body.classList.toggle("sb-sidenav-toggled");
            localStorage.setItem(
                "sb|sidebar-toggle",
                document.body.classList.contains("sb-sidenav-toggled")
            );
        });
    }
});

//mod Hugo

function entrar() {
    // login = document.getElementById("login").value;
    // senha = document.getElementById("senha").value;
    // console.log(login);
    // console.log(senha);
    // if (login == "" || senha == "") {
    //     document.getElementById("aviso").innerHTML =
    //         '<span class="alert alert-warning text-center">Campo(s) Vazio(s).</span>';
    //     console.log("Campo(s) Vazio(s)");
    // }
    // else if (login === "admin" && contTentativas == 4) {
    // 	document.getElementById("aviso").innerHTML =
    // 		'<span class="alert alert-danger text-center">Conta bloqueada!</span>';
    // }
    // else if (login === "admin" && senha === "123") {
    //alert("Bem-vindo Admin");
    // window.location.href = "../index.html";
    // document.getElementById("aviso").innerHTML =
    //     '<span class="alert alert-success text-center">Bem-vindo!</span>';
    // } else {
    //alert("login ou senha incorretos!!! Tente novamente.");
    // document.getElementById("aviso").innerHTML =
    //     '<span class="alert alert-danger text-center">login ou senha incorretos!</span>';
    // console.log("login ou senha incorretos!");
    // }
    //alert("teste");
}

function mostrar() {
    let isenha = document.getElementById("senha");
    if (isenha.type === "password") {
        isenha.type = "text";
        text_button.textContent = "ocultar senha";
    } else {
        isenha.type = "password";
        text_button.textContent = "mostrar senha";
    }
}

function openFullscreen() {
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) {
        /* Safari */
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
        /* IE11 */
        elem.msRequestFullscreen();
    }
}

function closeFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.webkitExitFullscreen) {
        /* Safari */
        document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
        /* IE11 */
        document.msExitFullscreen();
    }
}

function testeForm() {
    alert("ok");
}
//FIM mod Hugo
    </script>
    
</body>

</html>