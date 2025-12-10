<?php
session_start();
include('verifica_login.php');
include('menu_admin.php');
include('consultas.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Homepage Admin</title>
</head>
<body>
    <h2>Olá Admin, <?php echo $_SESSION['email'];?></h2>
    
    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de Pessoas Cadastradas
                </div>
                <div class="card-body">
                    <h2><?php echo $totalCadastardas; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de Pessoas em Informática
                </div>
                <div class="card-body">
                    <h2><?php echo $totalInfo; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de Pessoas em Enfermagem
                </div>
                <div class="card-body">
                    <h2><?php echo $totalEnf; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de Pessoas em Administração
                </div>
                <div class="card-body">
                    <h2><?php echo $totalAdm; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de Pessoas em D.S
                </div>
                <div class="card-body">
                    <h2><?php echo $totalDs; ?></h2>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Média Total de Alunos por Curso
                </div>
                <div class="card-body">
                    <h2><?php echo $mediaAlunosPorCurso; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Curso Mais Popular
                </div>
                <div class="card-body">
                    <h2><?php echo $cursoMaisPopular; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de responsáveis Mães
                </div>
                <div class="card-body">
                    <h2><?php echo $totalMae; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de responsáveis Pais
                </div>
                <div class="card-body">
                    <h2><?php echo $totalPai; ?></h2>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card shadow-sm text-center">
                <div class="card-header bg-primary text-white">
                    Total de responsáveis sendo Outros
                </div>
                <div class="card-body">
                    <h2><?php echo $totalOutro; ?></h2>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
        <div class="col-md-2 mt-2">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                Percentual de Pessoas por Curso
                </div>
                <div class="card-body">
                    <canvas id="graficoCursos"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    Porcentagem de Pessoas por Bairro
                </div>
                <div class="card-body">
                    <canvas id="graficoBairros"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        //Porcentagem por curso
        const cursos = <?php echo json_encode($cursos); ?>;
        const percentuaisCursos = <?php echo json_encode($percentuaisCursos); ?>;

        new Chart(document.getElementById("graficoCursos"), {
            type: "pie",
            data: {
                labels: cursos,
                datasets: [{
                    data: percentuaisCursos, 
                    backgroundColor: [
                        "#2c73ddff", 
                        "#aa0b0bff", 
                        "#ccda12ff",
                        "#3e0869ff",
                        "#dc3545"
                    ]
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                let label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed !== null) {
                                    label += context.parsed + '%';
                                }
                                return label;
                            }
                        }
                    }
                }
            }
        });

        //Bairro
        const bairros = <?php echo json_encode($bairros); ?>;
        const percentuais = <?php echo json_encode($percentuais); ?>;

        new Chart(document.getElementById("graficoBairros"), {
            type: "bar",
            data: {
                labels: bairros,
                datasets: [{
                    label: "Porcentagem (%)",
                    data: percentuais,
                    backgroundColor: "#2c73dd",
                    borderColor: "#1a4fa0",
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100,
                        title: {
                            display: true,
                            text: "% do total"
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>