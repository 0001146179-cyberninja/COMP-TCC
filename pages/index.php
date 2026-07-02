<?php session_start(); ?>
<?php include '../views/header.php' ?>
<link rel="stylesheet" href="../assets/style/style.css">
<?php include '../views/navbar.php' ?>


</header>

<?php 
if ($_SESSION['msg'] != ""){
  echo "<div id=". $_SESSION['type'] .">";
  echo "<p>" . $_SESSION['msg'] . "</p>";
  echo "</div>";
  $_SESSION['msg'] = "";
  $_SESSION['type'] = "";
} ?>

  <!--Carousel-->

  <div id="carouselExampleCaptions"
    class="carousel slide"
    data-bs-ride="carousel"
    data-bs-interval="3000">

    <!-- Setas -->
    <div class="carousel-indicators">

      <button type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide-to="0"
        class="active">
      </button>

      <button type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide-to="1">
      </button>

      <button type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide-to="2">
      </button>

    </div>

    <!-- Slides -->
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">

        <img src="../assets/images/guindaste.jpg"
          class="d-block w-100"
          alt="Máquina">

        <div class="carousel-caption d-none d-md-block">

          <h5>LiuGong lança guindastes sobre caminhão no Brasil</h5>

          <p>
            Modelos LTC800T5 e LTC900T5 são voltados
            para obras de alta complexidade.
          </p>
          <a href="https://revistamt.com.br/Noticias/Exibir/liugong-lanca-guindastes-sobre-caminhao-no-brasil"
          class="btn btn-secondary">

          Leia o artigo

          </a>

        </div>

      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">

        <img src="../assets/images/varias maquinas.webp"
          class="d-block w-100"
          alt="Guindaste">

        <div class="carousel-caption d-none d-md-block">

          <h5>Grupo brasileiro fecha parceria global</h5>

          <p>
            Grupo Osvaldo Zilli amplia atuação
            no setor de infraestrutura.
          </p>
          <a href="https://www.comprerural.com/"
          class="btn btn-secondary">

          Leia o artigo

          </a>

        </div>

      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">

        <img src="../assets/images/divulgacao-XCMG.webp"
          class="d-block w-100"
          alt="Investimento">

        <div class="carousel-caption d-none d-md-block">

          <h5>XCMG intensifica investimentos no Brasil</h5>

          <p>
            Empresa chinesa anuncia novo centro de
            pesquisa e desenvolvimento.
          </p>
          <a href="https://www.cnnbrasil.com.br/"
          class="btn btn-secondary">

          Leia o artigo

          </a>

        </div>

      </div>

    </div>

    <!-- Botões -->

    <button class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide="prev">

      <span class="carousel-control-prev-icon"></span>

    </button>

    <button class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide="next">

      <span class="carousel-control-next-icon"></span>

    </button>

  </div>

  <!--Conteúdo-->

  <section class="conteudo">

    <h2 class="titulo-secao">
      OPORTUNIDADES
    </h2>

    <div class="cards">

      

    </div>

  </section>

  <!-- SEÇÃO SAIBA MAIS -->
<section class="saiba-mais">
  <div class="item">
    <h3>Missão</h3>
    <div class="linha"></div>
    <p>
      Entregar soluções modernas e eficientes, focadas na melhor experiência para nossos clientes.
    </p>
  </div>

  <div class="item">
    <h3>Visão</h3>
    <div class="linha"></div>
    <p>
      Ser referência em inovação e qualidade, crescendo de forma sustentável no mercado.
    </p>
  </div>

  <div class="item">
    <h3>Valores</h3>
    <div class="linha"></div>
    <p>
      Transparência, compromisso, criatividade e respeito em cada projeto realizado.
    </p>
  </div>
</section>

<?php include '../views/footer.php' ?>