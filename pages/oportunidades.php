<?php session_start() ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php' ?>
<link rel="stylesheet" href="../assets/style/style.css">
<link rel="stylesheet" href="../assets/style/oportunidadesStyle.css">

<?php 
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

    <div class="cards">

      <!-- Card 1 -->
      <div class="card">
        <form action="curso.php" method="GET">

        <img src="../assets/images/guindaste.jpg"
          alt="Guindaste">

        <span class="categoria">
          Do Zero ao Canteiro
        </span>

        <h3>
          Presencial (com aulas práticas em campo)
        </h3>

        <h4><p>40 Horas</p></h4>

        <p>
          Curso totalmente focado na mão na massa. 
          Você vai aprender desde o checklist inicial da máquina (inspeção de rotina) 
          até manobras de escavação em terrenos instáveis, 
          carregamento de caçambas e nivelamento de solo.
        </p>

        <p>Treinamento rigoroso baseado nas normas de segurança NR-11 e NR-12, com 
            emissão de carteira de operador válida em todo o território nacional.</p><br>

        <input type="number" value="1" name="cursoId" hidden>
        <button type="submit" class="btn btn-orange me-3">Informações do Curso</button>
        </form>

      </div>

      <!-- Card 2 -->
      <div class="card">
        <form action="curso.php" method="GET">
        <img src="../assets/images/card2.png"
          alt="Guindaste">

        <span class="categoria">
            Operação e Precisão em Guindastes
        </span>

        <h3>
          Híbrido (Teoria online e prática presencial)
        </h3>

        <h4><p>60 Horas</p></h4>

        <p>
          Um curso de alta performance para quem quer dominar o içamento de grandes 
          estruturas. As aulas cobrem a leitura complexa de tabelas de carga, 
          cálculo de plano de rigging, física de tombamento, sinalização padrão e 
          operação em condições climáticas adversas.
        </p>

        <p>Uso de simuladores de realidade virtual de última 
            geração antes da prática real no guindaste, garantindo total segurança no aprendizado.</p>

        <input type="number" value="2" name="cursoId" hidden>
        <button type="submit" class="btn btn-orange me-3">Informações do Curso</button>
        </form>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <form action="curso.php" method="GET">
        <img src="../assets/images/guindaste.jpg"
          alt="Guindaste">

        <span class="categoria">
          Diagnóstico e Eletrônica Embarcada
        </span>

        <h3>
          EAD
        </h3>

        <h4><p>24 Horas</p></h4>

        <p>
          Perfeito para quem quer sair da mecânica tradicional e entrar na era digital. 
          O foco é o uso de softwares de diagnóstico (scanners), 
          leitura de códigos de falha (DTC), calibração de sensores hidráulicos e 
          interpretação de dados de telemetria das principais marcas do mercado.
        </p>

        <p>Acesso a uma comunidade exclusiva de alunos e professores para tirar dúvidas 
            sobre problemas reais de oficina por 6 meses após o término do curso.</p><br>

        <input type="number" value="3" name="cursoId" hidden>
        <button type="submit" class="btn btn-orange me-3">Informações do Curso</button>
        </form>
      </div>

    </div>

  </section>

  <h3 class="more">Mais por vir...</h3>

<?php include '../views/footer.php' ?>