<?php
session_start();
include('menu_admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Dados Cadastrados</title>
</head>
<body>
    <h2>
        Alunos Cadastrados
    </h2>
    <div class="container mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar por nome ou qualquer informação do aluno">
    </div>
    <table class="table">
        <tr>
            <th>Nome Completo</th>
            <th>Data de Nascimento</th>
            <th>Rua</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Nome do responsável</th>
            <th>Tipo de responsável</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>

        <?php
        include('conexao.php');

        $query = "SELECT id_aluno, aluno_name, data_nasc, rua, numero, bairro, cep, nome_responsavel, tipo_responsavel, curso FROM dados";
        $result = mysqli_query($conexao, $query);

        $row = mysqli_num_rows($result);

        if ($row > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['aluno_name']."</td>";
                echo "<td>".date("d/m/Y", strtotime($row['data_nasc']))."</td>";
                echo "<td>".$row['rua']."</td>";
                echo "<td>".$row['numero']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['cep']."</td>";
                echo "<td>".$row['nome_responsavel']."</td>";
                echo "<td>".$row['tipo_responsavel']."</td>";
                echo "<td>".$row['curso']."</td>";

                echo "<td>
                        <a href='editar_aluno.php?id=".$row['id_aluno']."' class='btn btn-primary btn-sm'>Editar</a>
                        <a href='remover_aluno.php?id=".$row['id_aluno']."' 
                            class='btn btn-danger btn-sm'
                            onclick=\"return confirm('Tem certeza que deseja remover este aluno?');\">
                            Remover
                        </a>
                    </td>";

                echo "</tr>";
            }
        }else {
            echo "<tr><td colspan='10'>Nenhum aluno cadastrado!</td></tr>";
        }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        function filterTable() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toUpperCase();
            const table = document.querySelector(".table");
            const tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) {
                let found = false;

                const tds = tr[i].getElementsByTagName("td");
                for (let j = 0; j < tds.length - 1; j++) {
                const td = tds[j];
                    if (td) {
                        if (td.textContent.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                        break;
                        }
                    }
                }

            if (found) {
                tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }

        document.getElementById("searchInput").addEventListener("keyup", filterTable);
    </script>
</body>
</html>