<?php 

include '../php/setupConfig.php';

session_start(); 

if ($_SESSION['login'] !== true) {
    header("Location: index.php");
    exit;
}

include '../views/header.php'; 
include '../views/navbar.php'; 
?>

<link rel="stylesheet" href="../assets/style/style.css">
<link rel="stylesheet" href="../assets/style/perfilStyle.css">

<div class="perfil-container">
    
    <div class="perfil-sidebar">
        <div class="avatar-wrapper">
            <img src="../assets/images/icons/icon-7797704_1280.png" alt="Foto de Perfil" class="perfil-avatar">
        </div>
        <h3><?= htmlspecialchars($_SESSION['nome'] ?? 'Usuário') ?></h3>
        <span class="badge-funcao">Operador</span>
        <p class="membro-desde">Conta criada em <?= $_SESSION['data_criacao'] ?></p>
        <p class="membro-desde">Última alteração em <?= $_SESSION['data_atualizacao'] ?></p>
    </div>

    <div class="perfil-conteudo">
        <h2>Minhas Informações</h2>
        
        <form class="perfil-form">
            <div class="form-grupo">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" value="<?= htmlspecialchars($_SESSION['nome'] ?? '') ?>" readonly>
            </div>

            <div class="form-grupo">
                <label for="email">E-mail Cadastrado</label>
                <input type="email" id="email" value="<?= htmlspecialchars($_SESSION['email'] ?? '') ?>" readonly>
            </div>

            <div class="form-grupo">
                <label for="email">Senha Cadastrada</label>
                <input type="text" id="senha" value="<?= htmlspecialchars($_SESSION['senha'] ?? '') ?>" readonly>
            </div>


            <div class="form-row">
                <div class="form-grupo">
                    <label for="telefone">Telefone / WhatsApp</label>
                    <input type="text" id="telefone" value="<?= htmlspecialchars($_SESSION['telefone'] ?? '') ?>" readonly>
                </div>
                <div class="form-grupo">
                    <label for="cpf">CPF</label>
                    <input type="texT" id="cPF" value="<?= htmlspecialchars($_SESSION['cpf'] ?? '') ?>" readonly>
                </div>
            </div>

            <div class="form-grupo">
                <label for="cnpj">CNPJ</label>
                <input type="text" id="cnpj" value="<?= htmlspecialchars($_SESSION['cnpj'] ?? '') ?>" readonly>
            </div>

            <div class="form-grupo">
                <label for="genero">Gênero</label>
                <input type="text" id="genero" value="<?= htmlspecialchars($_SESSION['genero'] ?? '') ?>" readonly>
            </div>

            <div class="perfil-botoes">
                <a href="perfilEdit.php" class="btn-editar">Editar Dados</a>
            </div>
        </form>
    </div>

</div>

<?php include '../views/footer.php'; ?>