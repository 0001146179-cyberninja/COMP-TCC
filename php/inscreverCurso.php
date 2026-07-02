<?php 

    session_start();

    require_once 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        
        $cursoId = $_GET['cursoId'] ?? null;
        $user = $_SESSION['email'] ?? null;

        if (!$cursoId || !$user) {
            $_SESSION['msg'] = 'Dados inválidos ou sessão expirada.'. $user;
            $_SESSION['type'] = 'Erro';
            header("Location: ../pages/oportunidades.php");
            exit; 
        }

        // 
        $stmt = $pdo->prepare("SELECT cursos FROM usuarios WHERE email = :email");
        $stmt->execute([':email' => $user]);
        
        // 
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        
        $cursosArray = json_decode($resultado['cursos'] ?? '', true);
        if (!is_array($cursosArray)) {
            $cursosArray = [];
        }

        
        if (in_array($cursoId, $cursosArray)){
            $_SESSION['msg'] = 'Você já está inscrito nesse curso!';
            $_SESSION['type'] = 'Erro';
            header("Location: ../pages/oportunidades.php");
            exit;
        } else {
           
            array_push($cursosArray, $cursoId);
            
            
            $cursosArrayJson = json_encode($cursosArray);
            
            
            $add = $pdo->prepare("UPDATE usuarios SET cursos = :cursos WHERE email = :email");
            $add->execute([
                ':cursos' => $cursosArrayJson,
                ':email'  => $user
            ]);

            $_SESSION['msg'] = "Você se inscreveu com sucesso!";
            $_SESSION['type'] = 'Sucesso';
            header("Location: ../pages/oportunidades.php");
            exit;
        }
            
    }

?>