<?php 

    session_start();

    require_once 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $tamanhoFonte = $_POST['font_size'];
        $tema = $_POST['tema'];
        $user = $_SESSION['email'];

        

        if ($_SESSION['login']){

            $check = $pdo->prepare("SELECT * FROM usuarios WHERE email='$user'");
            $check->execute();
            $usuario = $check->fetchColumn();

            if ($usuario < 0){
                $_SESSION['msg'] = 'Falha ao salvar alterações!';
                $_SESSION['type'] = 'Erro';
                header("Location: ../pages/index.php");
            } else {
                $sql = $pdo->prepare("UPDATE usuarios SET tema = '$tema', tamanho_fonte = '$tamanhoFonte' WHERE email = '$user'");
                $stmt = $sql->execute();
                $_SESSION['msg'] = 'Alterações Salvas!';
                $_SESSION['type'] = 'Sucesso';
                header("Location: ../pages/configuracoes.php");
            }
            
        } else {
            $_SESSION['msg'] = 'É necessário estar logado!';
            $_SESSION['type'] = 'Erro';
            header("Location: ../pages/index.php");
        }


            

    }

?>