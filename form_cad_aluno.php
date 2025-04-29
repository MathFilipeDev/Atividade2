<?php require_once "modules/header.php"; ?>

<form action="cadastro_aluno.php" method="post">
    <label for="nome_aluno">Nome completo: </label>
    <input type="text" name="nome_aluno" id="nome_aluno">
    <label for="email_aluno">E-mail: </label>
    <input type="text" name="email_aluno" id="email_aluno">
    <label for="telefone_aluno">Telefone: </label>
    <input type="text" name="telefone_aluno" id="telefone_aluno">
    <label for="nascimento">Data de Nascimento:</label>
    <input type="date" id="nascimento" name="nascimento" required />


      <fieldset>
        <legend>Gênero:</legend>
        <label><input type="radio" name="genero" value="masculino" required /> Masculino</label>
        <label><input type="radio" name="genero" value="feminino" required /> Feminino</label>
        <label><input type="radio" name="genero" value="outro" required /> Outro</label>
      </fieldset>


      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" rows="4" maxlength="200"></textarea>

      <input type="submit" value="Cadastrar aluno">

</form>


<?php require_once "modules/footer.php"; ?>