<?php
    include('conexao.php');

    //Total de pessoas cadastradas
    $totalCadastardas = "SELECT COUNT(*) AS total FROM dados";
    $resultTotal = mysqli_query($conexao, $totalCadastardas);
    $totalCadastardas = $resultTotal->fetch_assoc()['total'];

    //Total de pessoas em informática
    $info = "SELECT COUNT(*) AS info FROM dados WHERE curso = 'Informática'";
    $resultInfo = mysqli_query($conexao, $info);
    $totalInfo = $resultInfo->fetch_assoc()['info'];

    //Total de pessoas em enfermagem
    $enf = "SELECT COUNT(*) AS enf FROM dados WHERE curso = 'Enfermagem'";
    $resultEnf = mysqli_query($conexao, $enf);
    $totalEnf = $resultEnf->fetch_assoc()['enf'];

    //Total de alunos em administração
    $adm = "SELECT COUNT(*) AS adm FROM dados WHERE curso = 'Administração'";
    $resultAdm = mysqli_query($conexao, $adm);
    $totalAdm = $resultAdm->fetch_assoc()['adm'];

    //Total de alunos em desenvolvimento de sistemas
    $ds = "SELECT COUNT(*) AS ds FROM dados WHERE curso = 'Desenvolvimento de Sistemas'";
    $resultDs = mysqli_query($conexao, $ds);
    $totalDs = $resultDs->fetch_assoc()['ds'];

    //Total de alunos
    $total = "SELECT COUNT(*) AS total FROM dados";
    $resultTotal = mysqli_query($conexao, $total);
    $totalGeral = $resultTotal->fetch_assoc()['total']; 

    //Total de responsáveis sendo Mãe
    $mae = "SELECT COUNT(*) AS mae FROM dados WHERE tipo_responsavel = 'Mãe'";
    $resultMae = mysqli_query($conexao, $mae);
    $totalMae = $resultMae->fetch_assoc()['mae'];

    //Total de responsáveis sendo Pai
    $pai = "SELECT COUNT(*) AS pai FROM dados WHERE tipo_responsavel = 'Pai'";
    $resultPai = mysqli_query($conexao, $pai);
    $totalPai = $resultPai->fetch_assoc()['pai'];

    //Total de responsáveis sendo outros
    $outro = "SELECT COUNT(*) AS outro FROM dados WHERE tipo_responsavel = 'Outro'";
    $resultOutro = mysqli_query($conexao, $outro);
    $totalOutro = $resultOutro->fetch_assoc()['outro'];

    //Percentual de alunos por curso
    $cursosQuery = "SELECT curso, COUNT(*) AS quantidade FROM dados GROUP BY curso";
    $resultCursos = mysqli_query($conexao, $cursosQuery);
    $cursos = [];
    $quantidades = [];
    $percentuaisCursos = [];

    while($row = $resultCursos->fetch_assoc()) {
        $cursoNome = $row['curso'];
        $quantidade = $row['quantidade'];
    
        $cursos[] = $cursoNome;
        $quantidades[] = $quantidade;
    
        if ($totalGeral > 0) {
            $percentual = round(($quantidade / $totalGeral) * 100, 2);
        } else {
            $percentual = 0;
        }
        $percentuaisCursos[] = $percentual;
    }

    //Percentual de alunos por bairro
    $bairroQuery = "SELECT bairro, COUNT(*) AS quantidade FROM dados GROUP BY bairro";
    $resultBairro = mysqli_query($conexao, $bairroQuery);

    $bairros = [];
    $quantBairro = [];
    $totalPessoas = 0;

    while($row = $resultBairro->fetch_assoc()) {
        $bairros[] = $row['bairro'];
        $quantBairro[] = $row['quantidade'];
            $totalPessoas += $row['quantidade'];
    }

    $percentuais = [];
    foreach ($quantBairro as $q) {
        $percentuais[] = round(($q / $totalPessoas) * 100, 2);
    }


    //Média de alunos por curso
    $numCursos = count($cursos);
    $mediaAlunosPorCurso = 0;
    if ($numCursos > 0 && $totalGeral > 0) {
        $mediaAlunosPorCurso = round($totalGeral / $numCursos, 2);
    }

    //Curso mais popular
    $maisPopularQuery = "SELECT curso, COUNT(*) AS quantidade FROM dados GROUP BY curso ORDER BY quantidade DESC LIMIT 1";
    $resultMaisPopular = mysqli_query($conexao, $maisPopularQuery);
    $cursoMaisPopular = 'N/A';
    if ($resultMaisPopular && $resultMaisPopular->num_rows > 0) {
        $rowMaisPopular = $resultMaisPopular->fetch_assoc();
        $cursoMaisPopular = $rowMaisPopular['curso'];
    }
?>