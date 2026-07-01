<?php session_start() ?>
<?php include '../views/header.php' ?>


<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container">

        <!--Logo-->
        <a class="navbar-brand fw-bold" href="index.php">
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

<?php 
if ($_SESSION['msg'] != ""){
  echo "<div id=". $_SESSION['type'] .">";
  echo "<p>" . $_SESSION['msg'] . "</p>";
  echo "</div>";
  $_SESSION['msg'] = "";
  $_SESSION['type'] = "";
} ?>

<!--Início do formulário de cadastro-->
<div id="CADASTRO_BG">

  <h3 class="text-center mb-2">Cadastro</h3>
  <h6 class="text-center mb-2 text-muted"><small>Preencha o formulário abaixo para prosseguir</small></h6>
  <hr>

<form id = "Cadastro" method="POST" action="../php/registro.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Insira seu email.</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">Nós não iremos compartilhar seu email com ninguém.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Insira sua senha.</label><br>
    <div id="PASS1">
      <input name="senha" type="password" class="form-control" id="psw1" style="width: 85%;" required>
      <span id="eye" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
      </svg></span>
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Insira sua senha novamente.</label><br>
    <div id="PASS2">
    <input name="senha2" type="password" class="form-control" id="psw2" style="width: 85%;" required>
      <span id="eye_" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
        <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
      </svg></span>
    </div>
  </div>
  <div id="CHECKBOX-GROUP" class="mb-3 form-check">
    <input id="CHECKBOX" type="checkbox" class="form-check-input" id="exampleCheck1" onclick="SwitchButtonState()" required>
    <label class="form-check-label" for="exampleCheck1">Concordo com o Termos e Condições de Uso.</label>
  </div>
  <button id="REGISTRO" type="submit" class="btn btn-secondary active">Registro</button>

  <hr>

  <a class="login-page" href="login.php">Já possuo uma conta</a>

</form>


</div>
<script src="../assets/js/register.js"></script>
<?php include '../views/footer.php' ?>