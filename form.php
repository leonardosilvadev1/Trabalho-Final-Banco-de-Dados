<?php 
session_start();
include('menu.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-11 col-sm-1">
                    <div class="text-center my-5">
						<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                        </svg>
					</div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Form</h1>
                            <?php
								if(isset($_SESSION['mensagem'])):
							?>
							<div class="alert alert-info alert-dismissible fade show" role="alert">
								<?= $_SESSION['mensagem']; ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
							<?php 
								unset($_SESSION['mensagem']);
								endif;
							?>
                            <form action="form_config.php" method="POST" class="needs-validation">
                                <div class="mb-3">
									<label class="mb-2" for="nome">Nome Completo</label>
									<input id="nomeAluno" type="text" class="form-control" name="nomeAluno" value="" required autofocus>
									<div class="invalid-feedback">
										Name is invalid
									</div>
								</div>
                                <div class="mb-3">
									<label class="mb-2" for="data">Data de Nascimento</label>
									<input id="data_nasc" type="date" class="form-control" name="data_nasc" value="" required>
									<div class="invalid-feedback">
										Date is invalid
									</div>
								</div>
                                <div class="mb-3">
									<label class="mb-2" for="endereco">Endereço</label>
                                    <br>
                                    <label class="mb-2 text-muted" for="rua">Rua</label>
									<input id="rua" type="text" class="form-control" name="rua" value="" required>

                                    <label class="mb-2 text-muted" for="endereco">Número</label>
									<input id="numero" type="number" class="form-control" name="numero" value="" required>

                                    <label class="mb-2 text-muted" for="endereco">Bairro</label>
									<input id="bairro" type="text" class="form-control" name="bairro" value="" required>

                                    <label class="mb-2 text-muted" for="endereco">CEP</label>
									<input id="cep" type="number" class="form-control" name="cep" value="" required>

                                    <div class="invalid-feedback">
										Campos em branco
									</div>
								</div>
                                <div class="mb-3">
                                    <label for="responsavel">Nome Responsável</label>
                                    <input type="text" class="form-control" name="nomeResponsavel" id="nomeResponsavel" required>
                                    <div class="invalid-feedback">
										Name is invalid
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="tipoResponsavel" class="form-label">Tipo de responsável (Ex: Mãe)</label>
                                    <select name="tipoResponsavel" id="tipoResponsavel" class="form-select">
                                        <option selected disabled>Selecione</option>
                                        <option>Mãe</option>
                                        <option>Pai</option>
                                        <option>Outro</option>
                                    </select>
                                    <div class="invalid-feedback">
										Is invalid
									</div>
                                </div>
                                <div class="mb-3">
                                    <label for="curso" class="form-label">Curso</label>
                                    <select name="curso" id="curso" class="form-select">
                                        <option selected disabled>Selecione</option>
                                        <option value="Informática">Informática</option>
                                        <option value="Desenvolvimento de Sistemas">Desenvolvimento de Sistemas</option>
                                        <option value="Enfermagem">Enfermagem</option>
                                        <option value="Admistração">Admistração</option>
                                    </select>
                                    <div class="invalid-feedback">
										Is invalid
									</div>
                                </div>
                                <div class="d-flex align-items-center">
									<button type="submit" class="btn btn-primary ms-auto"n name="submit">
										Enviar
									</button>
								</div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>