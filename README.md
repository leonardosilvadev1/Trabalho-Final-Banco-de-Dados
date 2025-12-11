# Sistema completo de Gerenciamento de Alunos

## Este projeto é um Sistema de Gerenciamento de Alunos completo, consiste em um sistema de gestão de alunos (cadastro, edição, remoção, listagem, login, painel administrativo, etc.), desenvolvido como trabalho final da disciplina de Banco de Dados, ministrada pelo      professor Adeilson.  O sistema utiliza PHP para lógica de backend, e interage com um banco de dados MySQL para o armazenamento de dados e consultas SQL.

## Funcionalidades
- Cadastro de alunos.  
- Listagem de alunos cadastrados.  
- Edição de dados de alunos.  
- Remoção de alunos.  
- Login e autenticação de usuários.  
- Painel administrativo para gerenciar alunos.  
- Configuração de conexão com o banco de dados.

## Tecnologias Utilizadas
- Linguagem de Programação: PHP
- Banco de Dados: MySQL
- Gerenciamento de Banco: phpMyAdmin
- Frontend: HTML, CSS, JavaScript e Bootstrap

## Estrutura do Projeto
Os arquivos necessários para a criação das tabelas users, dados e admin estão localizados na pasta database.
- users.sql: Criação da tabela de usuários.
- admin.sql: Armazena os dados dos admins do sistema (Lembrando que devem ser criados dentro do próprio phpMyAdmin).
- dados.sql: Armazena os dados dos alunos cadastrados.
- Lembrando que deve cadastrar um usuário primeiro ao iniciar o projeto para acessar o painel de usuário e cadastrar um admin diretamente ao banco.

Arquivos PHP:
- conexao.php: Configuração da conexão com o MySQL.
- index.php, login.php, telacadastro.php, cadastro.php, verifica_login.php, logout.php: Arquivos e lógica de autenticação.
- form.php, form_config.php: Arquivos e lógica de cadastro de alunos.
- dados.php, editar_aluno.php, atualizar_aluno.php, remover_aluno.php: Arquivos e lógica de gerenciamento (CRUD).
- painel.php, painel_admin.php: Exibe a tela inicial do usuário e a Dashboard de dados (alunos, curso, responsáveis, etc.).
- menu.php, menu_admin.php: Barras de navegações separadas para uma melhor manutenção do código.
- consultas.php: Pega os dados do banco de dados para exibir na dashboard.

## Instalação e Configuração
- Requisitos: Verifique se possui um ambiente de desenvolvimento web como XAMPP, com PHP e MySQL instalado na sua máquina.

## Configuração do Banco de Dados:
- Acesse o phpMyAdmin ou SGBD de preferência e crie um novo banco de dados para à alocação das tabelas.
- No seu SGBD de preferência, copie e cole os códigos presentes nos arquivos: users.sql, alunos.sql e dados.sql, para a criação das tabelas e adição automática de dados de alunos.

## Conexão PHP:
Ajuste e configure o arquivo conexao.php para ajustar ao seu projeto com as credenciais de conexão (HOST, USUARIO, SENHA, DB).

## Imagens do Projeto

<img src="images/Tela de Login.png" alt="Tela de Login">
<img src="images/Tela de Cadastro.png" alt="Tela de Login">
<img src="images/Tela Principal Usuário.png" alt="Tela de Login">
<img src="images/Tela Principal Admin.png" alt="Tela de Login">
<img src="images/Formulário de Cadastro de Aluno.png" alt="Tela de Login">
<img src="images/Painel de Exibição e Edição de Alunos.png" alt="Tela de Login">
