<?php session_start() ?>
<?php include '../php/setupConfig.php' ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php' ?>
<link rel="stylesheet" href="../assets/style/style.css">
<link rel="stylesheet" href="../assets/style/oportunidadesStyle.css">

<?php 

include '../php/connect.php';

if ($_SESSION['msg'] != ""){
  echo "<div id=". $_SESSION['type'] .">";
  echo "<p>" . $_SESSION['msg'] . "</p>";
  echo "</div>";
  $_SESSION['msg'] = "";
  $_SESSION['type'] = "";
} ?>

  <!--Conteúdo-->

  <section class="conteudo">

    <h2 class="titulo-secao">
      OPORTUNIDADES
    </h2>


    <div class="cards-info">

      <?php 
        $stmt = $pdo->query('SELECT id, nome, tipo, texto1, texto2, fornecedor, horas FROM cursos');

        while($linha = $stmt->fetch()){
      ?>

      <div class="card">
        <form action="curso.php" method="GET">

        <img src="../assets/images/guindaste.jpg"
          alt="Guindaste">

        <span class="categoria">
          <?= $linha['nome'] ?> 
        </span>

        <h3>
          <?= $linha['tipo'] ?> 
        </h3>

        <h4><p><?= $linha['horas'] ?> Horas </p></h4>

        <p>
          <?= $linha['texto1'] ?> 
        </p>

        <p><?= $linha['texto2'] ?> </p><br>

        <input type="number" value="<?= $linha['id'] ?>" name="cursoId" hidden>
        <button type="submit" class="btn btn-orange me-3">Informações do Curso</button>
        </form>

      </div>

      <?php } ?>

    </div>

  </section>

  <h3 class="more">Mais por vir...</h3>

<?php include '../views/footer.php' ?>