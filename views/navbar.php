
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container">

        <!--Logo-->
        <a class="navbar-brand fw-bold" href="index.php">
          <img src="../assets/images/icons/logocomp.png" alt="" height="100px" width="200px">
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
              <a class="nav-link"
                href="../pages/oportunidades.php">
                Oportunidades
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link"
                href="../pages/info.php">
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
                href="../pages/cadastro.php">
                Cadastro / Login
              </a>
            </li>

          </ul>

        </div>

      </div>

    </nav>
    
<?php if ($_SESSION['login'] == true){ ?>
<div class="user-tab">
<button class="btn btn-perfil" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
  ☰
</button>

<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">MENU</h5>
    <button type="button" class="btn-close btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

       <!-- Perfil -->
    <div class="user-menu text-center mb-4">
        <a href="/perfil" class="profile-link">
            <img src="../assets/images/icons/icon-7797704_1280.png" alt="Perfil" class="profile-avatar">
        </a>

        <h5 class="mt-3"><?= $_SESSION['nome'] ?></h5>
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

        <a href="cursosUsuario.php" class="menu-item">
            <i class="bi bi-universal-access"></i>
            Cursos
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