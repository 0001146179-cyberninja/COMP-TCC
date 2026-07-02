<?php session_start(); ?>
<?php include '../php/setupConfig.php' ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php'?>
<link rel="stylesheet" href="../assets/style/configuracoesStyle.css">
<link rel="stylesheet" href="../assets/style/style.css">

<?php 
if ($_SESSION['msg'] != ""){
  echo "<div id=". $_SESSION['type'] .">";
  echo "<p>" . $_SESSION['msg'] . "</p>";
  echo "</div>";
  $_SESSION['msg'] = "";
  $_SESSION['type'] = "";
} ?>

    <form action="../php/salvarConfig.php" method="POST">
      <div class="config-page">
          <h1>CONFIGURAÇÕES</h1>

          <h5>OPÇÕES DE ACESSIBILIDADE</h5><br>

          <label for="font"><h5>Tamanho da Fonte</h5></label><br>
          <input type="number" name="font_size" id="font" value=<?= $font_size ?> step="0.1"><br><br>

          <label for="theme"><h5>Tema</h5></label><br>
          <select name="tema" id="theme">
            <option value="claro">Claro</option>
            <option value="escuro">Escuro</option>
          </select>
          <br><br>
          <button class="btn btn-orange ms-0" type="submit">Salvar</button>
      </div>

    </form>
  


<script src="../assets/js/config.js"></script>
<?php include '../views/footer.php' ?>