<?php include '../views/header.php' ?>


<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container">

        <!--Logo-->
        <a class="navbar-brand fw-bold" href="../pages/index.php">
          <img src="../assets/images/icons/placeholder_icon.png" alt="" height="35px" width="35px">
          COMP
        </a>

        <!--Botão Mobile-->
        <button class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarContent">

          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Conteúdo Navbar -->
        <div class="collapse navbar-collapse" id="navbarContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          </ul>

        </div>

      </div>

    </nav>


</header>

<link rel="stylesheet" href="../assets/style/style.css">
<link rel="stylesheet" href="../assets/style/registerStyle.css">
<!--Início do formulário de cadastro-->
<div id="CADASTRO_BG">

  <h3 class="text-center mb-2">Cadastro</h3>
  <h6 class="text-center mb-2 text-muted"><small>Preencha o formulário abaixo para prosseguir</small></h6>
  <hr>

<form id = "Cadastro" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Insira seu endereço de Email.</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nós não iremos compartilhar seu email com ninguém.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Insira sua senha.</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Insira sua senha novamente.</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input id="CHECKBOX" type="checkbox" class="form-check-input" id="exampleCheck1" onclick="SwitchButtonState()">
    <label class="form-check-label" for="exampleCheck1">Concordo com o Termos e Condições de Uso.</label>
  </div>
  <button id="REGISTRO" type="submit" class="btn btn-secondary active">Registro</button>
</form>
</div>

<?php include '../views/footer.php' ?>