<?php session_start() ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php' ?>
<link rel="stylesheet" href="../assets/style/style.css">
<link rel="stylesheet" href="../assets/style/oportunidadesStyle.css">

  <h1 class="titulo">Inscreva-se no Curso</h1>

  <?php 
  
  $cursoId = $_GET["cursoId"];
  switch($cursoId){

    case 1:

      $cursoNome = "Do Zero ao Canteiro";
      $cursoModalidade = "Presencial (com aulas práticas em campo)";
      $cursoDuracao = "40 Horas";
      $cursoLinha1 = "Curso totalmente focado na mão na massa. 
          Você vai aprender desde o checklist inicial da máquina (inspeção de rotina) 
          até manobras de escavação em terrenos instáveis, 
          carregamento de caçambas e nivelamento de solo.";
      $cursoLinha2 = "Treinamento rigoroso baseado nas normas de segurança NR-11 e NR-12, com 
            emissão de carteira de operador válida em todo o território nacional.";

    break;

    case 2:

      $cursoNome = "Operação e Precisão em Guindastes";
      $cursoModalidade = "Híbrido (Teoria online e prática presencial)";
      $cursoDuracao = "60 Horas";
      $cursoLinha1 = "Um curso de alta performance para quem quer dominar o içamento de grandes 
          estruturas. As aulas cobrem a leitura complexa de tabelas de carga, 
          cálculo de plano de rigging, física de tombamento, sinalização padrão e 
          operação em condições climáticas adversas.";
      $cursoLinha2 = "Uso de simuladores de realidade virtual de última 
            geração antes da prática real no guindaste, garantindo total segurança no aprendizado.";

    break;

    case 3:

      $cursoNome = "Diagnóstico e Eletrônica Embarcada";
      $cursoModalidade = "EAD";
      $cursoDuracao = "24 Horas";
      $cursoLinha1 = "Perfeito para quem quer sair da mecânica tradicional e entrar na era digital. 
          O foco é o uso de softwares de diagnóstico (scanners), 
          leitura de códigos de falha (DTC), calibração de sensores hidráulicos e 
          interpretação de dados de telemetria das principais marcas do mercado.";
      $cursoLinha2 = "Acesso a uma comunidade exclusiva de alunos e professores para tirar dúvidas 
            sobre problemas reais de oficina por 6 meses após o término do curso.";

    break;
  
  }

  echo("<div class='curso-info'>");
  echo("<h3>$cursoNome</h3>");
  echo("<h2>$cursoModalidade</h2>");
  echo("<h2>$cursoDuracao</h2>");
  echo("<h5><p>$cursoLinha1</p></h5>");
  echo("<h5>$cursoLinha2</p></h5>");
  echo("</div>");
  

  echo("<a href='../php/inscreverCurso.php?cursoId=$cursoId' id='subscribe' class='btn btn-orange' style='width: 40.8%;'>Inscreva-se</a>");

   ?>

<?php include '../views/footer.php' ?>