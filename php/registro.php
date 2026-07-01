<?php 

    session_start();

    require_once 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        if ($senha2 == $senha){

            $check = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE email='$email'");
            $check->execute();
            $exist = $check->fetchColumn();

            if ($exist > 0){
                $_SESSION['msg'] = 'Email já está sendo utilizado!';
                $_SESSION['type'] = 'Erro';
                header("Location: ../pages/cadastro.php");
            } else {
                $dataAtual = date('Y-m-d H:i:s');
                $add = $pdo->prepare("INSERT INTO usuarios (email, senha, data_criacao, data_atualizacao) VALUES ('$email', '$senha', '$dataAtual', '$dataAtual')");
                $add->execute();
                $_SESSION['msg'] = "Conta criada com sucesso, efetue o login!";
                $_SESSION['type'] = 'Sucesso';
                header("Location: ../pages/cadastro.php");
            }

        } else {
            $_SESSION['msg'] = 'As senhas não estão iguais!';
            $_SESSION['type'] = 'Erro';
            header("Location: ../pages/cadastro.php");
        }
    }

?>