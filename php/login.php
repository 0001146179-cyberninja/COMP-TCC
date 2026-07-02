<?php 

    session_start();

    require_once 'connect.php';

    if ($_SESSION['login'] == false){

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "SELECT COUNT(*) FROM usuarios WHERE email='$email'";

            $check = $pdo->prepare($sql);
            $check->execute();
            $exist = $check->fetchColumn();

            if ($exist > 0){

                $checkSql = "SELECT * FROM usuarios WHERE email=:email AND senha=:senha";
                if ($checkPass = $pdo->prepare($checkSql)){
                    //Link de parâmetros
                    $checkPass->bindParam(":email", $email);
                    $checkPass->bindParam(":senha", $senha);
                    $checkPass->execute();
                    $valid = $checkPass->fetchColumn();

                    if ($valid){
                            
                        $_SESSION['login'] = true;
                        $_SESSION['msg'] = 'Logado com sucesso!';
                        $_SESSION['type'] = 'Sucesso';
                        $_SESSION['email'] = $email;

                        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
                        $stmt->execute([':email' => $_SESSION['email']]);


                        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

                        $_SESSION['nome'] = $resultado['nome'];
                        $_SESSION['senha'] = $resultado['senha'];
                        $_SESSION['telefone'] = $resultado['telefone'];
                        $_SESSION['cpf'] = $resultado['cpf'];
                        $_SESSION['cnpj'] = $resultado['cnpj'];
                        $_SESSION['genero'] = $resultado['genero'];
                        $_SESSION['data_criacao'] = $resultado['data_criacao'];
                        $_SESSION['data_atualizacao'] = $resultado['data_atualizacao'];

                        header("Location: ../pages/index.php");

                    } else {
                        $_SESSION['msg'] = 'Senha ou Email incorretos!1';
                        $_SESSION['type'] = 'Erro';
                        header("Location: ../pages/login.php");
                    }

                }

            } else {
                $_SESSION['msg'] = 'Senha ou Email incorretos!2';
                $_SESSION['type'] = 'Erro';
                header("Location: ../pages/login.php");
            }


        }

    } else {
        $_SESSION['msg'] = 'Você já está logado!';
        $_SESSION['type'] = 'Aviso';
        header("Location: ../pages/index.php");
    }

?>