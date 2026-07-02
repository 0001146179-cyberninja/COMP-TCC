<?php 

include 'connect.php';

$user = $_SESSION['email'];

$check = $pdo->prepare("SELECT * FROM usuarios WHERE email='$user'");
$check->execute();
$usuario = $check->fetch(PDO::FETCH_ASSOC);

if (!is_array($usuario)){
    $font_size = 16;
} else {
    
    $font_size = $usuario['tamanho_fonte'];

}

?>

<style>

* {
    font-size: <?= $font_size ?>;
}

</style>