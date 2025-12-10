<?php
include('conexao.php');
$id = $_GET['id'];
$query = "SELECT * FROM dados WHERE id_aluno = $id";
$result = mysqli_query($conexao, $query);
$aluno = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-4">
    <h2>Editar Aluno</h2>
    <form action="atualizar_aluno.php" method="POST" class="mt-4">

        <input type="hidden" name="id_aluno" value="<?php echo $aluno['id_aluno']; ?>">
        <div class="mb-3">
            <label class="form-label">Nome Completo</label>
            <input type="text" name="aluno_name" class="form-control" value="<?php echo $aluno['aluno_name']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" name="data_nasc" class="form-control" value="<?php echo $aluno['data_nasc']; ?>">
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Rua</label>
                <input type="text" name="rua" class="form-control" value="<?php echo $aluno['rua']; ?>">
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Número</label>
                <input type="text" name="numero" class="form-control" value="<?php echo $aluno['numero']; ?>">
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Bairro</label>
                <input type="text" name="bairro" class="form-control" value="<?php echo $aluno['bairro']; ?>">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">CEP</label>
            <input type="text" name="cep" class="form-control" value="<?php echo $aluno['cep']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nome do Responsável</label>
            <input type="text" name="nome_responsavel" class="form-control" value="<?php echo $aluno['nome_responsavel']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Responsável</label>
            <input type="text" name="tipo_responsavel" class="form-control" value="<?php echo $aluno['tipo_responsavel']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Curso</label>
            <input type="text" name="curso" class="form-control" value="<?php echo $aluno['curso']; ?>">
        </div>
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="dados.php" class="btn btn-secondary">Cancelar</a>

    </form>

</body>
</html>