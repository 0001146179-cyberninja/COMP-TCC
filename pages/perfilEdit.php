<?php 
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
        
        <form class="perfil-form" method="POST" action="../php/salvarAlteracoes.php">
            <div class="form-grupo">
                <label for="nome">Nome Completo</label>
                <input name="nome" type="text" id="nome" value="<?= htmlspecialchars($_SESSION['nome'] ?? '') ?>">
            </div>

            <div class="form-grupo">
                <label for="email">E-mail Cadastrado</label>
                <input name="email" type="email" id="email" value="<?= htmlspecialchars($_SESSION['email'] ?? '') ?>">
            </div>

            <div class="form-grupo">
                <label for="senha">Senha Cadastrada</label>
                <input name="senha" type="text" id="senha" value="<?= $_SESSION['senha'] ?>">
            </div>

            <div class="form-row">
                <div class="form-grupo">
                    <label for="telefone">Telefone / WhatsApp</label>
                    <input name="telefone" type="text" id="telefone" value="<?= htmlspecialchars($_SESSION['telefone'] ?? '') ?>">
                </div>
                <div class="form-grupo">
                    <label for="cpf">CPF</label>
                    <input name="cpf" type="texT" id="cpf" value="<?= htmlspecialchars($_SESSION['cpf'] ?? '') ?>">
                </div>
            </div>

            <div class="form-grupo">
                <label for="cnpj">CNPJ</label>
                <input name="cnpj" type="text" id="cnpj" value="<?= htmlspecialchars($_SESSION['cnpj'] ?? '') ?>">
            </div>

            <div class="form-grupo">
                <label for="genero">Gênero</label>
                <select id="genero" name="genero" class="select-custom">
                    <option value="" disabled selected>Selecione seu gênero</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro / Prefiro não dizer</option>
                </select>
            </div>

            <div class="perfil-botoes">
                <button type="submit" class="btn-editar">Salvar Alterações</a>
            </div>
        </form>
    </div>

</div>

<?php include '../views/footer.php'; ?>