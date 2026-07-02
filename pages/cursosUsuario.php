<?php session_start(); 
include '../php/connect.php'; ?>
<?php include '../views/header.php' ?>
<?php include '../views/navbar.php';
ob_start();

$stmt = $pdo->query('SELECT id, nome FROM cursos');

$stmtCheck = $pdo->prepare("SELECT cursos FROM usuarios WHERE email = :email");
$stmtCheck->execute([':email' => $_SESSION['email']]);


$resultado = $stmtCheck->fetch(PDO::FETCH_ASSOC);

$cursosArray = json_decode($resultado['cursos'] ?? '', true);
if (!is_array($cursosArray)) {
    $cursosArray = [];
}



?>

<link rel="stylesheet" href="../assets/style/style.css">
<link rel="stylesheet" href="../assets/style/cursosStyle.css">

<h2>Cursos em que estou inscrito</h2>

<div class="painel">

<?php 

if ((count($cursosArray)-1) === 0){

    echo('<h6>Não tem nenhum curso aqui...</h6>');

}

while($linha = $stmt->fetch()){
    if (in_array($linha['id'], $cursosArray)){
        echo "<div class='curso-lista'>";
        echo "<h4>" . $linha["nome"] . "</h4>";
        echo "<a href='../php/desinscreverCurso.php?cursoId=" . $linha['id'] . "' class='cancel'>Cancelar Inscrição</a>";
        
        echo "<a href='curso.php?cursoId=" . $linha['id'] . "' class='consult'>Consultar Informações</a>";
        
        echo "</div>";
    }   
}



?>

</div>

<h4 class="fim-lista">Fim da lista de cursos</h4>

<?php include '../views/footer.php' ?>