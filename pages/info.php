<?php session_start(); ?>
<?php include '../php/setupConfig.php' ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php'?>
<link rel="stylesheet" href="../assets/style/style.css">

    <div class="novidades">
        <h1 class="titulo-curso">Novidades</h1>

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

        <img src="../assets/images/maquina.jpg"
          class="d-block w-100"
          alt="Máquina">

        <div class="carousel-caption d-none d-md-block">

        </div>

      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">

        <img src="../assets/images/guindaste.jpg"
          class="d-block w-100"
          alt="Guindaste">

        <div class="carousel-caption d-none d-md-block">

        </div>

      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">

        <img src="../assets/images/divulgacao-XCMG.webp"
          class="d-block w-100"
          alt="Investimento">

        <div class="carousel-caption d-none d-md-block">       

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

    </div>


    
  <!--Cursos-->

  <section class="cursos">

    <h2 class="titulo-curso">
      CURSOS EXTERNOS
    </h2>

    <div class="cards-info">

      <!-- Card 1 -->
      <div class="card">

        <img src="../assets/images/tbo.png"
          alt="Curso 1">

        <span class="nome_curso">
        </span>

        <h3>
        TBO - Treinamento Básico Operacional Grátis
        </h3>

        <p>
        O Curso Online de TBO - Treinamento Básico Operacional da Unova Cursos é uma excelente oportunidade para quem busca conhecimento na área de operações, sem precisar sair de casa e com a vantagem de ser um Curso Gratuito. Com a crescente demanda por profissionais capacitados em operações e gestão, este curso se destaca por oferecer uma base sólida em diversas áreas essenciais, desde gestão de recursos humanos até inovação e melhoria contínua.
        </p>

        <div class="info">

          <span>25 Fev 2026</span>

          <span>COMP</span>

        </div>

        <a href="https://www.unovacursos.com.br/curso/tbo-treinamento-basico-operacional"
          class="btn btn-orange ms-2 me-2">

          Saiba mais 

        </a>

      </div>

         <!-- Card 2 -->
      <div class="card">

        <img src="../assets/images/jcb.webp"
          alt="Curso 2">

        <span class="nome_curso">
        </span>

        <h3>
         JCB mira fatia maior em retroescavadeiras com novo modelo feito no Brasil 
        </h3>
         <p>
       A JCB vai acelerar a disputa pelo mercado brasileiro de retroescavadeiras. A 
       fabricante britânica, líder mundial no segmento, acaba de lançar no país a nova 
       3CX Plus, modelo produzido em Sorocaba (SP)... 
        </p>

        <div class="info">

          <span>28 Jun 2026</span>

          <span>COMP</span>

        </div>

        <a href="https://veja.abril.com.br/coluna/radar-economico/jcb-mira-fatia-maior-em-retroescavadeiras-com-novo-modelo-feito-no-brasil/"
          class="btn btn-orange ms-2 me-2">

          Saiba mais 

        </a>

      </div>

      <!-- Card 3 -->
      <div class="card">

        <img src="../assets/images/frota.jpg"
          alt="Curso 1">

        <span class="nome_curso">
        </span>

        <h3>
       Estratégias para Renovação de Frota de Máquinas Pesadas em 2026
        </h3>
        <p>
        A renovação de frota é o processo de atualização sistemática de um conjunto de 
        máquinas ou veículos, visando manter a frota operando com o máximo de eficiência 
        e o mínimo de custo. No contexto da linha amarela (escavadeiras, motoniveladoras,
         rolos compactadores), esse processo é regido pela curva de desgaste e pelo TCO 
         (Total Cost of Ownership ou Custo Total de Propriedade).
        </p>

        <div class="info">

          <span>2 Mar 2026</span>

          <span>COMP</span>

        </div>

        <a href="https://satel.com.br/blog/estrategias-para-renovacao-de-frota-de-maquinas/"
          class="btn btn-orange ms-2 me-2">

          Saiba mais 

        </a>

      </div>


       
    </div>

    <h2 class="titulo-curso">
      NOTÍCIAS
    </h2>

    <div class="cards-info">

  
      <!-- Card 4 -->
      <div class="card">

        <img src="../assets/images/guindaste.jpg"
          alt="Guindaste">

        <span class="categoria">
          LANÇAMENTO
        </span>

        <h3>
          LiuGong lança guindastes sobre caminhão no Brasil
        </h3>

        <p>
          Modelos LTC800T5 e LTC900T5 são voltados
          para obras de alta complexidade.
        </p>

        <div class="info">

          <span>25 Fev 2026</span>

          <span>m&t</span>

        </div>

        <a href="https://revistamt.com.br/Noticias/Exibir/liugong-lanca-guindastes-sobre-caminhao-no-brasil"
          class="btn btn-orange ms-2 me-2">

          Leia o artigo

        </a>

      </div>

      <!-- Card 5 -->
      <div class="card">

        <img src="../assets/images/varias maquinas.webp"
          alt="Máquinas">

        <span class="categoria">
          NOTÍCIAS
        </span>

        <h3>
          Grupo brasileiro fecha parceria global
        </h3>

        <p>
          Grupo Osvaldo Zilli amplia atuação
          no setor de infraestrutura.
        </p>

        <div class="info">

          <span>11 Fev 2026</span>

          <span>Compre Rural</span>

        </div>

        <a href="https://www.comprerural.com/"
          class="btn btn-orange ms-2 me-2">

          Leia o artigo

        </a>

      </div>

      <!-- Card 6 -->
      <div class="card">

        <img src="../assets/images/divulgacao-XCMG.webp"
          alt="XCMG">

        <span class="categoria">
          INVESTIMENTO
        </span>

        <h3>
          XCMG intensifica investimentos no Brasil
        </h3>

        <p>
          Empresa chinesa anuncia novo centro de
          pesquisa e desenvolvimento.
        </p>

        <div class="info">

          <span>17 Out 2025</span>

          <span>CNN Brasil</span>

        </div>

        <a href="https://www.cnnbrasil.com.br/"
          class="btn btn-orange ms-2 me-2">

          Leia o artigo

        </a>

      </div>

    </div>

  </section>







<?php include '../views/footer.php' ?>