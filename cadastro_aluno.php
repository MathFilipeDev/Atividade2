<?php
    // Inclusão do arquivo de conexão com o banco de dados
    include 'database.php';

    // Declarar variáveis para armazenar as informações
    // enviadas via formulário
    $nome_aluno = $_POST['nome_aluno'];
    $email_aluno = $_POST['email_aluno'];
    $telefone_aluno = $_POST['telefone_aluno'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $mensagem = $_POST['mensagem'];

    // Construir uma string para cadastrar as informações no banco de dados

    $sql = "INSERT INTO Inscrito (nome_aluno, email_aluno, telefone_aluno, nascimento, genero, mensagem) VALUES ('$nome_aluno', '$email_aluno', '$telefone_aluno', '$nascimento', '$genero', '$mensagem')";

    echo $sql;
    // Função para cadastrar no banco de dados
    if (mysqli_query($conexao,$sql)){
        // Função para redirecionar para página indicada
        header("Location: listar_alunos.php");
    }
    else{
        echo "Falha ao cadastrar no banco de dados";
    }
 ?>