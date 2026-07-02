<?php 
session_start();
require_once 'connect.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $oldSenha = $_SESSION['senha'];
        $oldEmail = $_SESSION['email'];
        
        $email    = $_POST['email'];
        $senha    = $_POST['senha'];
        $nome     = $_POST['nome'];
        $cpf      = $_POST['cpf'];
        $cnpj     = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $genero   = $_POST['genero'];
        $data_atualizacao = date('Y-m-d H:i:s');

        // CORREÇÃO 4: Protegendo contra SQL Injection usando Named Parameters (:email, :senha)
        $sql = "SELECT id FROM usuarios WHERE email = :email AND senha = :senha";
        $check = $pdo->prepare($sql);
        $check->execute([
            ':email' => $oldEmail,
            ':senha' => $oldSenha
        ]);
        
        // Retorna a linha do usuário caso ele exista
        $usuario = $check->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $id_usuario = $usuario['id'];

            // CORREÇÃO 1: Usando placeholders na query de UPDATE (Segurança e sintaxe)
            $stmt = $pdo->prepare("UPDATE usuarios SET 
                nome = :nome, 
                email = :email, 
                senha = :senha, 
                cpf = :cpf, 
                cnpj = :cnpj, 
                telefone = :telefone, 
                genero = :genero, 
                data_atualizacao = :data_atualizacao 
                WHERE id = :id");
                
            $stmt->execute([
                ':nome'             => $nome,
                ':email'            => $email,
                ':senha'            => $senha,
                ':cpf'              => $cpf,
                ':cnpj'             => $cnpj,
                ':telefone'         => $telefone,
                ':genero'           => $genero,
                ':data_atualizacao' => $data_atualizacao,
                ':id'               => $id_usuario
            ]);

            // CORREÇÃO 2: Atualizando a $_SESSION com os dados novos vindos do $_POST
            $_SESSION['nome']             = $nome;
            $_SESSION['email']            = $email; // Importante atualizar o e-mail também!
            $_SESSION['senha']            = $senha;
            $_SESSION['telefone']         = $telefone;
            $_SESSION['cpf']              = $cpf;
            $_SESSION['cnpj']             = $cnpj;
            $_SESSION['genero']           = $genero;
            $_SESSION['data_atualizacao'] = $data_atualizacao;

            header("Location: ../pages/index.php");
            exit;

        } else {
            $_SESSION['msg'] = 'Falha ao salvar alterações! Usuário inválido.';
            $_SESSION['type'] = 'Erro';
            header("Location: ../pages/perfil.php");
            exit;
        }
    }
}
?>