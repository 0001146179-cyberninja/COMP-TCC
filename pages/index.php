<?php session_start(); ?>
<?php include '../views/header.php' ?>
<link rel="stylesheet" href="../assets/style/style.css">

<header> <!--Navbar Index-->

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

            <li class="nav-item">
              <a class="nav-link active"
                href="#">
                Oportunidades
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link"
                href="info.php">
                Informações
              </a>
            </li>

            <!-- Dropdown -->
           <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown">

                Trabalho
              </a>

              <ul class="dropdown-menu">

                <li>
                  <a class="dropdown-item" href="trabalhoE.php">
                    Divulgue sua vaga de serviço
                  </a>
                </li>

                <li>
                  <a class="dropdown-item" href="trabalhoF.php">
                    Forneça seu serviço
                  </a>
                </li>

              </ul>

            </li>

            <li class="nav-item">
              <a class="nav-link"
                href="cadastro.php">
                Cadastro / Login
              </a>
            </li>

          </ul>

          <!-- Busca -->
          <form class="d-flex">

            <input class="form-control me-2"
              type="search"
              placeholder="Buscar">

            <button class="btn btn-outline-success"
              type="submit">

              Buscar
            </button>

          </form>

        </div>

      </div>

    </nav>

<?php if ($_SESSION['login'] == true){ ?>
<div class="user-tab">
<button class="btn btn-orange" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
  ☰
</button>

<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">CONFIGURAÇÕES</h5>
    <button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

       <!-- Perfil -->
    <div class="user-menu text-center mb-4">
        <a href="/perfil" class="profile-link">
            <img src="img/user.jpg" alt="Perfil" class="profile-avatar">
        </a>

        <h5 class="mt-3"><?php $_SESSION['nome'] ?></h5>
        <small>Meu Perfil</small>
    </div>

    <hr>

    <!-- Menu -->
    <div class="menu-options">

        <a href="perfil.php" class="menu-item">
            <i class="bi bi-person-circle"></i>
            Perfil
        </a> <br>

        <a href="/configuracoes" class="menu-item">
            <i class="bi bi-gear"></i>
            Configurações
        </a> <br>

        <a href="/acessibilidade" class="menu-item">
            <i class="bi bi-universal-access"></i>
            Acessibilidade
        </a> <br>

        <a href="/seguranca" class="menu-item">
            <i class="bi bi-shield-lock"></i>
            Segurança
        </a> <br>

        <a href="../php/logout.php" class="menu-item text-danger">
            <i class="bi bi-box-arrow-right"></i>
            Sair
        </a> <br>

    </div>

    </div>
  </div>
</div>
</div>
<?php } ?>


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

      <!-- Card 1 -->
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

      <!-- Card 2 -->
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

      <!-- Card 3 -->
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