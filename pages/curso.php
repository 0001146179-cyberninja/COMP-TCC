<?php session_start() ?>
<?php include '../php/setupConfig.php' ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php' ?>
<link rel="stylesheet" href="../assets/style/style.css">
<link rel="stylesheet" href="../assets/style/oportunidadesStyle.css">

  <h1 class="titulo">Inscreva-se no Curso</h1>

  <?php 
  include '../php/connect.php';
  $cursoId = $_GET["cursoId"];
 

    $stmt = $pdo->query('SELECT id, nome, horas, texto1, texto2, tipo, fornecedor FROM cursos');

    while($linha = $stmt->fetch()){
        if ($linha['id'] == $cursoId){

            $cursoNome = $linha['nome'];
            $cursoModalidade = $linha['tipo'];
            $cursoDuracao = $linha['horas'];
            $cursoLinha1 = $linha['texto1'];
            $cursoLinha2 = $linha['texto2'];
            $cursoFornecedor = $linha['fornecedor'];

        }
    }



  echo("<div class='curso-info'>");
  echo("<h3>$cursoNome</h3>");
  echo("<h2>$cursoModalidade</h2>");
  echo("<h2>$cursoDuracao</h2>");
  echo("<h5><p>$cursoLinha1</p></h5>");
  echo("<h5>$cursoLinha2</p></h5>");
  echo("<h5>Por ".$cursoFornecedor."</p></h5>");
  echo("</div>");

  require_once '../php/connect.php';

  $user = $_SESSION['email'] ?? null;
  
  $stmt = $pdo->prepare("SELECT cursos FROM usuarios WHERE email = :email");
  $stmt->execute([':email' => $user]);

  $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
  
  
  $cursosArray = json_decode($resultado['cursos'] ?? '', true);
  if (!is_array($cursosArray)) {
      $cursosArray = [];
  }

  
  if (in_array($cursoId, $cursosArray)){
      echo("<button id='subscribe' class='btn btn-orange' style='width: 40.8%;'>Já inscrito</button>");
  } else {
      echo("<a href='../php/inscreverCurso.php?cursoId=$cursoId' id='subscribe' class='btn btn-orange' style='width: 40.8%;'>Inscreva-se</a>");
  }

   ?>

  <a href="oportunidades.php" class="voltar"><h3>Voltar</h3></a>

  <?php include '../views/footer.php' ?>