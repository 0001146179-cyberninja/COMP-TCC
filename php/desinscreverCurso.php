<?php 

    session_start();

    require_once 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        
        $cursoId = $_GET['cursoId'] ?? null;
        $user = $_SESSION['email'] ?? null;

        if (!$cursoId || !$user) {
            $_SESSION['msg'] = 'Falha ao Cancelar Inscrição.'. $user;
            $_SESSION['type'] = 'Erro';
            header("Location: ../pages/cursosUsuario.php");
            exit; 
        }


        $stmt = $pdo->prepare("SELECT cursos FROM usuarios WHERE email = :email");
        $stmt->execute([':email' => $user]);
        

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
        $cursosArray = json_decode($resultado['cursos'] ?? '', true);
        if (!is_array($cursosArray)) {
            $cursosArray = [];
        }

        
        if (in_array($cursoId, $cursosArray)){

            $index = array_search($cursoId, $cursosArray);

            unset($cursosArray[$index]);

            $cursosJson = json_encode($cursosArray);

            $newstmt = $pdo->prepare("UPDATE usuarios SET cursos = '$cursosJson' WHERE email = '$user'");
            $newstmt->execute();

            $_SESSION['msg'] = "Você se desinscreveu com sucesso!";
            $_SESSION['type'] = 'Sucesso';
            header("Location: ../pages/cursosUsuario.php");
        }
   
    }

?>