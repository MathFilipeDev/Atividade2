<?php require_once "modules/header.php"; 
include 'database.php';
$comando = "SELECT * FROM Inscrito";
$consultar = mysqli_query($conexao,$comando);

while ($dados=mysqli_fetch_array($consultar)){
    echo $dados['nome_aluno'].'<br>';
    echo $dados['email_aluno'].'<br>';
    echo $dados['telefone_aluno'].'<br>';
    echo $dados['nascimento'].'<br>';
    echo $dados['genero'].'<br>';
    echo $dados['mensagem'].'<br>'.'<br>';
}
require_once "modules/footer.php"; ?>