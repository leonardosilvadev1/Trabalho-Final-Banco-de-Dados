-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2025 às 18:01
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados`
--

CREATE TABLE `dados` (
  `id_aluno` int(11) NOT NULL,
  `aluno_name` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `rua` varchar(70) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(70) NOT NULL,
  `cep` int(8) NOT NULL,
  `nome_responsavel` varchar(100) NOT NULL,
  `tipo_responsavel` varchar(20) NOT NULL,
  `curso` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados`
--

INSERT INTO `dados` (`id_aluno`, `aluno_name`, `data_nasc`, `rua`, `numero`, `bairro`, `cep`, `nome_responsavel`, `tipo_responsavel`, `curso`) VALUES
(1, 'Levi', '2008-12-05', 'Teste', 6, 'Teste', 63700000, 'Diana', 'Mãe', 'Informática'),
(2, 'Leonardo', '2009-04-02', 'Teste', 10, 'Teste', 63700000, 'Artemir', 'Mãe', 'Informática'),
(4, 'João', '2008-10-10', 'Central', 12, 'Centro', 63700001, 'Maria', 'Mãe', 'Enfermagem'),
(5, 'Maria', '2008-05-11', 'Central', 15, 'Morada I', 63709997, 'Marcelo', 'Pai', 'Desenvolvimento de Sistemas'),
(7, 'Lúcia', '2008-11-22', 'Moreira da Rocha', 99, 'Centro', 63701001, 'Marília', 'Mãe', 'Informática'),
(9, 'Christian Adriel', '2009-05-26', 'Travessa Miguel Cardoso', 409, 'Cidade Nova', 63700000, 'Duciane', 'Mãe', 'Informática'),
(10, 'Ana Clara Santos', '2007-03-12', 'Rua das Flores', 124, 'Centro', 88100012, 'Maria Santos', 'Mãe', 'Informática'),
(11, 'Bruno Henrique Almeida', '2006-11-25', 'Rua Primavera', 88, 'Jardim América', 88045021, 'Carlos Almeida', 'Pai', 'Enfermagem'),
(12, 'Carla Beatriz Oliveira', '2005-07-09', 'Rua Sol Nascente', 200, 'Bela Vista', 88123000, 'Joana Oliveira', 'Mãe', 'Desenvolvimento de Sistemas'),
(13, 'Daniel Rodrigues', '2004-02-18', 'Rua Sete de Setembro', 455, 'Centro', 88230010, 'Paulo Rodrigues', 'Pai', 'Administração'),
(14, 'Eduardo Martins', '2007-09-15', 'Rua das Acácias', 320, 'Santa Luzia', 88112544, 'Fernanda Martins', 'Mãe', 'Informática'),
(15, 'Fernanda Lima', '2006-06-30', 'Rua Dom Pedro', 540, 'Nova Esperança', 88214020, 'Carla Lima', 'Mãe', 'Enfermagem'),
(16, 'Gabriel Pereira', '2005-12-01', 'Rua Paraíso', 76, 'Monte Verde', 88177009, 'Sérgio Pereira', 'Pai', 'Desenvolvimento de Sistemas'),
(17, 'Helena Duarte', '2006-04-22', 'Rua Cedro', 93, 'Jardim Europa', 88199230, 'Lúcia Duarte', 'Mãe', 'Administração'),
(18, 'Igor Fernandes', '2007-01-08', 'Rua Ipê Amarelo', 110, 'Campo Belo', 88200112, 'Roberto Fernandes', 'Pai', 'Informática'),
(19, 'Julia Melo', '2005-10-06', 'Rua Margaridas', 22, 'Sol Nascente', 88090014, 'Patrícia Melo', 'Mãe', 'Enfermagem'),
(20, 'Kauã Nascimento', '2004-03-19', 'Rua das Palmeiras', 389, 'Bela União', 88177055, 'Marcos Nascimento', 'Pai', 'Desenvolvimento de Sistemas'),
(21, 'Larissa Gomes', '2006-12-12', 'Rua Vitória', 67, 'Centro', 88123022, 'Sandra Gomes', 'Mãe', 'Administração'),
(22, 'Matheus Ribeiro', '2007-07-21', 'Rua Aroeira', 102, 'Planalto', 88220100, 'Leandro Ribeiro', 'Pai', 'Informática'),
(23, 'Nicole Vasconcelos', '2005-05-04', 'Rua Santo Amaro', 59, 'Nova Canaã', 88055033, 'Rosana Vasconcelos', 'Mãe', 'Enfermagem'),
(24, 'Otávio Moreira', '2006-09-17', 'Rua das Laranjeiras', 444, 'Santa Marta', 88244010, 'Paulo Moreira', 'Pai', 'Desenvolvimento de Sistemas'),
(25, 'Paula Azevedo', '2004-01-10', 'Rua Esperança', 190, 'Centro', 88112211, 'Ana Azevedo', 'Mãe', 'Administração'),
(26, 'Rafael Costa', '2007-11-14', 'Rua Girassóis', 252, 'Vila Nova', 88133771, 'Ricardo Costa', 'Pai', 'Informática'),
(27, 'Sofia Cardoso', '2006-02-26', 'Rua Jacarandá', 305, 'Jardim dos Lagos', 88211500, 'Daniela Cardoso', 'Mãe', 'Enfermagem'),
(28, 'Thiago Carvalho', '2005-08-02', 'Rua União', 400, 'Monte Alegre', 88044210, 'João Carvalho', 'Pai', 'Desenvolvimento de Sistemas'),
(29, 'Vitória Martins', '2004-06-15', 'Rua Bela Vista', 500, 'Centro', 88199001, 'Sônia Martins', 'Mãe', 'Administração'),
(30, 'Arthur Pinto', '2007-02-13', 'Rua Ângico', 78, 'São João', 88233021, 'Eduardo Pinto', 'Pai', 'Informática'),
(31, 'Beatriz Campos', '2006-04-29', 'Rua Verde Vale', 90, 'Jardim Brasil', 88145700, 'Helena Campos', 'Mãe', 'Enfermagem'),
(32, 'Caio Sales', '2005-11-19', 'Rua América', 512, 'Itaúna', 88002217, 'Rogério Sales', 'Pai', 'Desenvolvimento de Sistemas'),
(33, 'Diana Rocha', '2004-09-25', 'Rua Santo Antônio', 14, 'Centro', 88155112, 'Carolina Rocha', 'Mãe', 'Administração'),
(34, 'Emanuel Silva', '2007-08-10', 'Rua Horizonte', 231, 'Jardim Bela Flor', 88211540, 'Bruno Silva', 'Pai', 'Informática'),
(35, 'Flávia Mendes', '2006-05-07', 'Rua Estrela', 120, 'Monte Cristo', 88077101, 'Luciana Mendes', 'Mãe', 'Enfermagem'),
(36, 'Giovana Torres', '2005-03-11', 'Rua Ouro Negro', 456, 'Esperança', 88110230, 'Márcia Torres', 'Mãe', 'Desenvolvimento de Sistemas'),
(37, 'Henrique Souza', '2004-07-08', 'Rua Central', 330, 'Centro', 88211770, 'Carlos Souza', 'Pai', 'Administração'),
(38, 'Isabella Monteiro', '2007-10-27', 'Rua Luz Divina', 189, 'Boa Vista', 88122080, 'Patrícia Monteiro', 'Mãe', 'Informática'),
(39, 'João Pedro Farias', '2006-06-16', 'Rua Nova Era', 275, 'Serra Alta', 88245002, 'Fernando Farias', 'Pai', 'Enfermagem'),
(40, 'Karen Souza', '2005-01-23', 'Rua Bela Flor', 612, 'Centro', 88111290, 'Janete Souza', 'Mãe', 'Desenvolvimento de Sistemas'),
(41, 'Lucas Ferreira', '2004-11-29', 'Rua Paz', 402, 'Alto Vale', 88041112, 'José Ferreira', 'Pai', 'Administração'),
(42, 'Marina Borges', '2007-04-04', 'Rua Sol Poente', 122, 'São Miguel', 88233450, 'Tatiana Borges', 'Mãe', 'Informática'),
(43, 'Nathan Cruz', '2006-09-08', 'Rua Harmonia', 501, 'Cidade Verde', 88199811, 'Roberta Cruz', 'Mãe', 'Enfermagem'),
(44, 'Olivia Nolasco', '2005-02-18', 'Rua Boa Vista', 341, 'Alta Vista', 88255004, 'Marina Nolasco', 'Mãe', 'Desenvolvimento de Sistemas'),
(45, 'Pedro Araújo', '2004-12-21', 'Rua Santa Fé', 178, 'Centro', 88177102, 'Cláudio Araújo', 'Pai', 'Administração'),
(46, 'Quezia Ramos', '2007-08-12', 'Rua da Amizade', 215, 'Jardim Luz', 88210410, 'Helen Ramos', 'Mãe', 'Informática'),
(47, 'Ruan Batista', '2006-03-09', 'Rua Palmeira Real', 64, 'Campo Grande', 88111088, 'Mário Batista', 'Pai', 'Enfermagem'),
(48, 'Sara Medeiros', '2005-10-03', 'Rua das Hortênsias', 406, 'Centro', 88044033, 'Teresa Medeiros', 'Mãe', 'Desenvolvimento de Sistemas'),
(49, 'Tiago Lopes', '2004-04-14', 'Rua Lago Azul', 89, 'Lagoa Nova', 88244550, 'Aline Lopes', 'Mãe', 'Administração'),
(50, 'Ursula Pacheco', '2007-01-28', 'Rua Bela Esperança', 270, 'Cidade Alta', 88122312, 'Márcia Pacheco', 'Mãe', 'Informática'),
(51, 'Vitor Hugo Martins', '2006-07-01', 'Rua Primavera', 99, 'Jardim Florido', 88233477, 'Raimundo Martins', 'Pai', 'Enfermagem'),
(52, 'Willian Teixeira', '2005-06-22', 'Rua Estrela Guia', 300, 'Monte Azul', 88144670, 'José Teixeira', 'Pai', 'Desenvolvimento de Sistemas'),
(53, 'Xênia Almeida', '2004-03-11', 'Rua do Sol', 140, 'Centro', 88211120, 'Cecília Almeida', 'Mãe', 'Administração'),
(54, 'Yasmin Figueiredo', '2007-12-06', 'Rua Onze', 421, 'Bela Vista', 88123031, 'Joana Figueiredo', 'Mãe', 'Informática'),
(55, 'Zack Silva', '2006-10-14', 'Rua Três Marias', 342, 'Nova Brasília', 88241001, 'Carlos Silva', 'Pai', 'Enfermagem'),
(56, 'Adriana Ramos', '2005-05-29', 'Rua Horizonte Azul', 415, 'Vila Esperança', 88077510, 'Helena Ramos', 'Mãe', 'Desenvolvimento de Sistemas'),
(57, 'Brenda Duarte', '2004-08-24', 'Rua São Carlos', 221, 'Centro', 88178031, 'Marcos Duarte', 'Pai', 'Administração'),
(58, 'Caio Avelar', '2007-03-15', 'Rua Planalto', 32, 'Planalto', 88210018, 'Silvia Avelar', 'Mãe', 'Informática'),
(59, 'Daiane Castro', '2006-01-20', 'Rua Bela Vista', 100, 'Santa Luzia', 88122241, 'Eduarda Castro', 'Mãe', 'Enfermagem'),
(60, 'Eduarda Ramos', '2005-04-05', 'Rua das Amoras', 88, 'Vila Nova', 88099010, 'Cristina Ramos', 'Mãe', 'Desenvolvimento de Sistemas'),
(61, 'Felipe Lacerda', '2004-09-17', 'Rua Verde Vida', 520, 'Centro', 88177440, 'Robson Lacerda', 'Pai', 'Administração'),
(62, 'Gabriela Freitas', '2007-11-11', 'Rua das Pedras', 61, 'Morada Nova', 88221103, 'Kelly Freitas', 'Mãe', 'Informática'),
(63, 'Heitor Vargas', '2006-02-13', 'Rua Nova Brasília', 403, 'Nova Brasília', 88100220, 'Juliana Vargas', 'Mãe', 'Enfermagem'),
(64, 'Isis de Moraes', '2005-01-30', 'Rua Flor de Lis', 77, 'Jardim Real', 88277810, 'Marta de Moraes', 'Mãe', 'Desenvolvimento de Sistemas'),
(65, 'Jonas Alves', '2004-06-19', 'Rua Harmonia', 309, 'Centro', 88044780, 'Luís Alves', 'Pai', 'Administração'),
(66, 'Karla Menezes', '2007-04-22', 'Rua Bela União', 54, 'União', 88155711, 'Janaina Menezes', 'Mãe', 'Informática'),
(67, 'Leonardo Sousa', '2006-08-03', 'Rua Lago Verde', 317, 'Lago Norte', 88234310, 'Maurício Sousa', 'Pai', 'Enfermagem'),
(68, 'Manuela Paiva', '2005-07-07', 'Rua do Cedro', 19, 'Bela Flor', 88111201, 'Tatiana Paiva', 'Mãe', 'Desenvolvimento de Sistemas'),
(69, 'Nathan Azevedo', '2004-02-22', 'Rua da Paz', 412, 'Centro', 88233488, 'Ricardo Azevedo', 'Pai', 'Administração'),
(70, 'Otto Correia', '2007-01-18', 'Rua Esperança', 148, 'Vista Alegre', 88155420, 'Sandra Correia', 'Mãe', 'Informática'),
(71, 'Priscila Ramos', '2006-09-09', 'Rua Bela Flor', 500, 'Jardim Feliz', 88077710, 'Mônica Ramos', 'Mãe', 'Enfermagem'),
(72, 'Rafaela Souza', '2005-06-14', 'Rua Nova', 404, 'Centro', 88211290, 'Patrícia Souza', 'Mãe', 'Desenvolvimento de Sistemas'),
(73, 'Samuel Brito', '2004-10-01', 'Rua Sol Nascente', 43, 'Sol Nascente', 88133410, 'João Brito', 'Pai', 'Administração'),
(74, 'Tatiane Lopes', '2007-12-23', 'Rua Santa Clara', 231, 'Santa Clara', 88055091, 'Eliane Lopes', 'Mãe', 'Informática'),
(75, 'Uelinton Sales', '2006-02-16', 'Rua Cristal', 199, 'Cristal', 88200401, 'Marcelo Sales', 'Pai', 'Enfermagem'),
(76, 'Valentina Correia', '2005-09-25', 'Rua Margarida', 87, 'Jardim Primavera', 88100245, 'Juliana Correia', 'Mãe', 'Desenvolvimento de Sistemas'),
(77, 'Wesley Fernandes', '2004-05-18', 'Rua da Liberdade', 298, 'Centro', 88233009, 'Carlos Fernandes', 'Pai', 'Administração'),
(78, 'Xavier Almeida', '2007-06-20', 'Rua das Palmeiras', 340, 'Nova União', 88112310, 'Clarice Almeida', 'Mãe', 'Informática'),
(79, 'Yuri Matos', '2006-03-26', 'Rua Monte Azul', 455, 'Monte Azul', 88255501, 'Felipe Matos', 'Pai', 'Enfermagem'),
(80, 'Zuleica Rocha', '2005-11-28', 'Rua Santo André', 132, 'Santo André', 88099110, 'Teresa Rocha', 'Mãe', 'Desenvolvimento de Sistemas'),
(81, 'Arthur Silva', '2004-07-02', 'Rua Sol Poente', 54, 'Sol Poente', 88111120, 'Paulo Silva', 'Pai', 'Administração'),
(82, 'Beatriz Tenório', '2007-03-14', 'Rua das Acácias', 211, 'Acácias', 88122004, 'Camila Tenório', 'Mãe', 'Informática'),
(83, 'Carlos Lima', '2006-01-30', 'Rua Central', 422, 'Centro', 88211880, 'João Lima', 'Pai', 'Enfermagem'),
(84, 'Daniela Fagundes', '2005-06-20', 'Rua Nova Esperança', 133, 'Nova Esperança', 88055020, 'Fátima Fagundes', 'Mãe', 'Desenvolvimento de Sistemas'),
(85, 'Eduardo Maciel', '2004-10-27', 'Rua Estrela Dalva', 298, 'Estrelas', 88277710, 'Marcos Maciel', 'Pai', 'Administração'),
(86, 'Fernanda Duarte', '2007-02-11', 'Rua Jardim Real', 109, 'Jardim Real', 88155661, 'Luciana Duarte', 'Mãe', 'Informática'),
(87, 'Guilherme Castro', '2006-06-12', 'Rua Pau Brasil', 301, 'Pau Brasil', 88199310, 'Pedro Castro', 'Pai', 'Enfermagem'),
(88, 'Helena Lira', '2005-05-11', 'Rua Bela Vida', 78, 'Bela Vida', 88244310, 'Alessandra Lira', 'Mãe', 'Desenvolvimento de Sistemas'),
(89, 'Ian Gomes', '2004-01-29', 'Rua Cinco', 304, 'Centro', 88122119, 'Fábio Gomes', 'Pai', 'Administração'),
(90, 'Jéssica Moura', '2007-09-17', 'Rua Nova Luz', 220, 'Nova Luz', 88210044, 'Adriana Moura', 'Mãe', 'Informática'),
(91, 'Kelvin Torres', '2006-12-09', 'Rua Trinta', 501, 'Jardim Verde', 88090411, 'Eliane Torres', 'Mãe', 'Enfermagem'),
(92, 'Larissa Oliveira', '2005-08-07', 'Rua José Bonifácio', 132, 'Centro', 88113420, 'Roberta Oliveira', 'Mãe', 'Desenvolvimento de Sistemas'),
(93, 'Matheus Cardoso', '2004-02-28', 'Rua Brasil Novo', 299, 'Brasil Novo', 88288741, 'Ronaldo Cardoso', 'Pai', 'Administração'),
(94, 'Natália Freire', '2007-10-30', 'Rua Paz e Amor', 411, 'Paz e Amor', 88144711, 'Larissa Freire', 'Mãe', 'Informática'),
(95, 'Otávia Correia', '2006-04-14', 'Rua Três Irmãos', 356, 'Três Irmãos', 88122210, 'Paula Correia', 'Mãe', 'Enfermagem'),
(96, 'Pedro Silveira', '2005-09-28', 'Rua Bela União', 78, 'União', 88087100, 'Sérgio Silveira', 'Pai', 'Desenvolvimento de Sistemas'),
(97, 'Quenia Miranda', '2004-06-05', 'Rua Serra Dourada', 390, 'Serra Dourada', 88255090, 'Alessandra Miranda', 'Mãe', 'Administração'),
(98, 'Raul Batista', '2007-03-21', 'Rua Flores do Campo', 259, 'Campo Verde', 88177845, 'Marcelo Batista', 'Pai', 'Informática'),
(99, 'Sabrina Torres', '2006-05-27', 'Rua Açucena', 475, 'Jardim Azul', 88100320, 'Marta Torres', 'Mãe', 'Enfermagem'),
(100, 'Thiago Moraes', '2005-12-14', 'Rua Vitória', 41, 'Vitória', 88155414, 'Henrique Moraes', 'Pai', 'Desenvolvimento de Sistemas'),
(101, 'Ursula Campos', '2004-03-09', 'Rua São Pedro', 132, 'Centro', 88044088, 'Denise Campos', 'Mãe', 'Administração'),
(102, 'Victor Menezes', '2007-07-26', 'Rua Lago dos Cisnes', 500, 'Lago Azul', 88277801, 'Eduardo Menezes', 'Pai', 'Informática'),
(103, 'William Torres', '2006-02-18', 'Rua Palmeiras', 204, 'Palmeiras', 88133850, 'Joana Torres', 'Mãe', 'Enfermagem'),
(104, 'Ximena Duarte', '2005-04-28', 'Rua Arco Íris', 33, 'Arco Íris', 88055199, 'Caroline Duarte', 'Mãe', 'Desenvolvimento de Sistemas'),
(105, 'Yago Brito', '2004-09-07', 'Rua Santa Rita', 411, 'Santa Rita', 88111071, 'Roberta Brito', 'Mãe', 'Administração'),
(106, 'Zara Melo', '2007-02-02', 'Rua das Mangueiras', 502, 'Mangueiras', 88255540, 'Patrícia Melo', 'Mãe', 'Informática'),
(107, 'Alexandre Porto', '2006-08-15', 'Rua Nova Esperança', 312, 'Nova Esperança', 88122410, 'Fernanda Porto', 'Mãe', 'Informática'),
(108, 'Bárbara Antunes', '2005-03-09', 'Rua Dom Pedro II', 77, 'Centro', 88211090, 'Márcia Antunes', 'Mãe', 'Enfermagem'),
(109, 'César Mourão', '2007-11-04', 'Rua Girassol', 189, 'Jardim Florido', 88055340, 'Cláudia Mourão', 'Mãe', 'Desenvolvimento de Sistemas'),
(110, 'Denise Silveira', '2004-12-29', 'Rua das Acácias', 501, 'Acácias', 88133001, 'Rogério Silveira', 'Pai', 'Administração'),
(111, 'Eliel Santos', '2006-05-18', 'Rua Vista Alegre', 94, 'Vista Alegre', 88244200, 'Patrícia Santos', 'Mãe', 'Informática'),
(112, 'Fabiana Costa', '2005-07-27', 'Rua Santo Expedito', 144, 'Santo Expedito', 88199441, 'Julio Costa', 'Pai', 'Enfermagem'),
(113, 'Giovanni Martins', '2007-09-11', 'Rua Azul Celeste', 221, 'Sol Nascente', 88077155, 'Renata Martins', 'Mãe', 'Desenvolvimento de Sistemas'),
(114, 'Heloísa Nunes', '2006-04-06', 'Rua Margaridas', 365, 'Jardim América', 88233077, 'Lucia Nunes', 'Mãe', 'Administração'),
(115, 'Ian Ribeiro', '2005-01-22', 'Rua Caetano Pinto', 30, 'Centro', 88144709, 'Marcela Ribeiro', 'Mãe', 'Informática'),
(116, 'Joana Queiroz', '2004-06-10', 'Rua das Oliveiras', 402, 'Oliveiras', 88255055, 'Carolina Queiroz', 'Mãe', 'Enfermagem'),
(117, 'Kleber Araujo', '2007-05-03', 'Rua das Figueiras', 128, 'Jardim Central', 88122941, 'Marina Araujo', 'Mãe', 'Desenvolvimento de Sistemas');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
