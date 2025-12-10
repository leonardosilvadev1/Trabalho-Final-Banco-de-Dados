# Sistema completo de Gerenciamento de Alunos

<h2>
  Este projeto é um Sistema de Gerenciamento de Alunos completo, consiste em um sistema de gestão de alunos (cadastro, edição, remoção, listagem, login, painel administrativo, etc.), desenvolvido como trabalho final da disciplina de Banco de Dados, ministrada pelo            professor Adeilson.  O sistema utiliza PHP para lógica de backend, e interage com um banco de dados MySQL para o armazenamento de dados e consultas SQL.
</h2>

## Funcionalidades
- Cadastro de alunos.  
- Listagem/visualização dos alunos cadastrados.  
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

## Instalação e Configuração
- Requisitos: Verifique se possui um ambiente de desenvolvimento web como XAMPP, com PHP e MySQL instalado na sua máquina.

## Conexão PHP:
Ajuste e configure o arquivo conexao.php para ajustar ao seu projeto com as credenciais de conexão (HOST, USUARIO, SENHA, DB).

<h2>
  Imagens do Projeto
</h2>
<img src="images/Tela de Login.png" alt="Tela de Login">
<img src="images/Tela de Cadastro.png" alt="Tela de Login">
<img src="images/Tela Principal Usuário.png" alt="Tela de Login">
<img src="images/Tela Principal Admin.png" alt="Tela de Login">
<img src="images/Formulário de Cadastro de Aluno.png" alt="Tela de Login">
<img src="images/Painel de Exibição e Edição de Alunos.png" alt="Tela de Login">
