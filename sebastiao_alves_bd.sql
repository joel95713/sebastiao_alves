-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Dez-2023 às 00:31
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `id_colaborador` int(11) NOT NULL,
  `data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `acessos`
--

INSERT INTO `acessos` (`id`, `id_colaborador`, `data`) VALUES
(1, 2, '20:54:30 - 23/11/2023'),
(2, 2, '20:56:37 - 23/11/2023'),
(3, 1, '22:37:17 - 23/11/2023'),
(4, 1, '22:45:02 - 23/11/2023'),
(5, 1, '21:10:22 - 24/11/2023'),
(6, 1, '21:18:11 - 24/11/2023'),
(7, 1, '19:39:53 - 02/12/2023'),
(8, 2, '19:40:09 - 02/12/2023'),
(9, 1, '19:40:21 - 02/12/2023'),
(10, 1, '19:45:52 - 02/12/2023'),
(11, 1, '19:46:18 - 02/12/2023'),
(12, 1, '21:34:41 - 02/12/2023'),
(13, 1, '14:39:26 - 03/12/2023'),
(14, 2, '18:51:27 - 03/12/2023'),
(15, 1, '19:05:25 - 03/12/2023'),
(16, 1, '19:21:21 - 03/12/2023'),
(17, 3, '19:26:26 - 03/12/2023'),
(18, 3, '19:27:05 - 03/12/2023'),
(19, 7, '11:59:57 - 04/12/2023'),
(20, 7, '13:07:52 - 04/12/2023'),
(21, 7, '23:35:02 - 04/12/2023'),
(22, 7, '23:36:12 - 04/12/2023'),
(23, 7, '23:42:31 - 04/12/2023'),
(24, 7, '00:52:03 - 05/12/2023'),
(25, 7, '14:59:31 - 10/12/2023'),
(26, 7, '15:02:17 - 10/12/2023'),
(27, 7, '15:02:39 - 10/12/2023'),
(28, 7, '15:04:15 - 10/12/2023'),
(29, 7, '15:20:03 - 10/12/2023'),
(30, 7, '15:40:37 - 10/12/2023'),
(31, 7, '15:41:37 - 10/12/2023'),
(32, 7, '16:23:04 - 10/12/2023'),
(33, 7, '16:46:57 - 10/12/2023'),
(34, 7, '23:00:17 - 11/12/2023'),
(35, 7, '11:58:38 - 12/12/2023'),
(36, 7, '12:26:52 - 12/12/2023'),
(37, 7, '15:19:56 - 12/12/2023'),
(38, 7, '15:28:28 - 12/12/2023'),
(39, 7, '15:28:40 - 12/12/2023'),
(40, 7, '19:56:01 - 12/12/2023'),
(41, 7, '20:13:13 - 12/12/2023'),
(42, 7, '22:56:06 - 12/12/2023'),
(43, 7, '19:39:37 - 13/12/2023'),
(44, 7, '23:38:51 - 13/12/2023'),
(45, 7, '23:40:46 - 13/12/2023'),
(46, 7, '23:45:39 - 13/12/2023'),
(47, 7, '11:11:27 - 14/12/2023'),
(48, 7, '11:28:31 - 14/12/2023'),
(49, 7, '11:49:43 - 14/12/2023'),
(50, 6, '14:41:24 - 14/12/2023'),
(51, 6, '15:18:13 - 14/12/2023'),
(52, 6, '19:17:57 - 14/12/2023'),
(53, 6, '22:04:07 - 14/12/2023'),
(54, 6, '22:04:59 - 14/12/2023'),
(55, 6, '22:06:11 - 14/12/2023'),
(56, 6, '22:07:30 - 14/12/2023'),
(57, 6, '22:08:31 - 14/12/2023'),
(58, 6, '22:09:07 - 14/12/2023'),
(59, 6, '22:09:38 - 14/12/2023'),
(60, 6, '22:10:03 - 14/12/2023'),
(61, 6, '22:10:57 - 14/12/2023'),
(62, 6, '22:12:06 - 14/12/2023'),
(63, 6, '22:12:21 - 14/12/2023'),
(64, 6, '22:14:37 - 14/12/2023'),
(65, 6, '23:08:55 - 14/12/2023'),
(66, 7, '19:34:16 - 17/12/2023'),
(67, 6, '20:06:28 - 17/12/2023'),
(68, 8, '20:07:00 - 17/12/2023'),
(69, 6, '20:07:54 - 17/12/2023'),
(70, 6, '20:08:26 - 17/12/2023'),
(71, 6, '20:18:41 - 17/12/2023'),
(72, 6, '20:30:46 - 17/12/2023'),
(73, 6, '22:00:58 - 17/12/2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL,
  `CreatedOn` varchar(200) NOT NULL,
  `UpdatedOn` varchar(200) NOT NULL,
  `CreatedBy` varchar(200) NOT NULL,
  `UpdatedBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem`, `texto`, `CreatedOn`, `UpdatedOn`, `CreatedBy`, `UpdatedBy`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/conteudo.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\" Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '', '23:02:21 - 11/12/2023', '', '7 - Beatriz');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem_desktop` varchar(1000) NOT NULL,
  `imagem_mobile` varchar(1000) NOT NULL,
  `link_saber_mais` varchar(1000) NOT NULL,
  `UpdatedOn` varchar(200) DEFAULT NULL,
  `CreatedOn` varchar(200) DEFAULT NULL,
  `UpdatedBy` varchar(200) DEFAULT NULL,
  `CreatedBy` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `observacao`, `titulo`, `texto`, `imagem_desktop`, `imagem_mobile`, `link_saber_mais`, `UpdatedOn`, `CreatedOn`, `UpdatedBy`, `CreatedBy`) VALUES
(1, 'Novidade', 'Senhora do Amor e da Guerra', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris enim sapien, malesuada quis mollis et, vestibulum vitae diam. Donec vestibulum tempus lectus, a varius lorem lobortis non. Nam viverra erat velit, nec interdum quam eleifend a. Nullam sem urna, convallis eget neque in, mollis porttitor lacus. Suspendisse placerat neque non sem tempus lacinia. Aliquam quis nibh quis tortor accumsan scelerisque molestie vitae nisl. Sed iaculis urna ante, nec vulputate ante mattis vitae. Nulla facilisi.</p><p>Sed nisi ipsum, efficitur eget dolor ut, laoreet aliquam leo. Suspendisse lobortis pharetra sapien eget ultrices. Nullam ultrices condimentum iaculis. Aliquam faucibus nibh nec nisi fermentum placerat. Maecenas imperdiet odio ac risus vehicula, quis sollicitudin tortor imperdiet. Suspendisse malesuada semper sagittis. Nullam convallis sapien odio, at pretium odio tincidunt sed. Aenean erat ipsum, egestas eu egestas id, scelerisque ut nunc.a</p>', 'http://localhost/sebastiao_alves/uploads/desktop/cabecalho1.jpg', 'http://localhost/sebastiao_alves/uploads/mobile/cabecalho1.jpg', 'http://localhost/sebastiao_alves/index.php?pagina=livros&id=1', '22:12:04 - 17/12/2023', NULL, '6 - Joel', NULL),
(2, 'Mais Vendido', 'O caracol estrábico', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris enim sapien, malesuada quis mollis et, vestibulum vitae diam. Donec vestibulum tempus lectus, a varius lorem lobortis non. Nam viverra erat velit, nec interdum quam eleifend a. Nullam sem urna, convallis eget neque in, mollis porttitor lacus. Suspendisse placerat neque non sem tempus lacinia. Aliquam quis nibh quis tortor accumsan scelerisque molestie vitae nisl. Sed iaculis urna ante, nec vulputate ante mattis vitae. Nulla facilisi.</p><p>Sed nisi ipsum, efficitur eget dolor ut, laoreet aliquam leo. Suspendisse lobortis pharetra sapien eget ultrices. Nullam ultrices condimentum iaculis. Aliquam faucibus nibh nec nisi fermentum placerat. Maecenas imperdiet odio ac risus vehicula, quis sollicitudin tortor imperdiet. Suspendisse malesuada semper sagittis. Nullam convallis sapien odio, at pretium odio tincidunt sed. Aenean erat ipsum, egestas eu egestas id, scelerisque ut nunc.</p>', 'http://localhost/sebastiao_alves/uploads/desktop/cabecalho2.jpg', 'http://localhost/sebastiao_alves/uploads/mobile/cabecalho2.jpg', 'http://localhost/sebastiao_alves/index.php?pagina=livros&id=2', '14:23:00 - 14/12/2023', NULL, '7 - Beatriz', NULL),
(3, 'Promoção', 'O colecionador de Amnésias', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris enim sapien, malesuada quis mollis et, vestibulum vitae diam. Donec vestibulum tempus lectus, a varius lorem lobortis non. Nam viverra erat velit, nec interdum quam eleifend a. Nullam sem urna, convallis eget neque in, mollis porttitor lacus. Suspendisse placerat neque non sem tempus lacinia. Aliquam quis nibh quis tortor accumsan scelerisque molestie vitae nisl. Sed iaculis urna ante, nec vulputate ante mattis vitae. Nulla facilisi.</p><p>Sed nisi ipsum, efficitur eget dolor ut, laoreet aliquam leo. Suspendisse lobortis pharetra sapien eget ultrices. Nullam ultrices condimentum iaculis. Aliquam faucibus nibh nec nisi fermentum placerat. Maecenas imperdiet odio ac risus vehicula, quis sollicitudin tortor imperdiet. Suspendisse malesuada semper sagittis. Nullam convallis sapien odio, at pretium odio tincidunt sed. Aenean erat ipsum, egestas eu egestas id, scelerisque ut nunc.</p>', 'http://localhost/sebastiao_alves/uploads/desktop/cabecalho3.jpg', 'http://localhost/sebastiao_alves/uploads/mobile/cabecalho3.jpg', 'http://localhost/sebastiao_alves/index.php?pagina=livros&id=3', '14:23:42 - 14/12/2023', NULL, '7 - Beatriz', NULL),
(4, '', 'O velho que pensava que fugia Teste', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris enim sapien, malesuada quis mollis et, vestibulum vitae diam. Donec vestibulum tempus lectus, a varius lorem lobortis non. Nam viverra erat velit, nec interdum quam eleifend a. Nullam sem urna, convallis eget neque in, mollis porttitor lacus. Suspendisse placerat neque non sem tempus lacinia. Aliquam quis nibh quis tortor accumsan scelerisque molestie vitae nisl. Sed iaculis urna ante, nec vulputate ante mattis vitae. Nulla facilisi.</p><p>Sed nisi ipsum, efficitur eget dolor ut, laoreet aliquam leo. Suspendisse lobortis pharetra sapien eget ultrices. Nullam ultrices condimentum iaculis. Aliquam faucibus nibh nec nisi fermentum placerat. Maecenas imperdiet odio ac risus vehicula, quis sollicitudin tortor imperdiet. Suspendisse malesuada semper sagittis. Nullam convallis sapien odio, at pretium odio tincidunt sed. Aenean erat ipsum, egestas eu egestas id, scelerisque ut nunc.</p>', 'http://localhost/sebastiao_alves/uploads/desktop/cabecalho4.jpg', 'http://localhost/sebastiao_alves/uploads/mobile/cabecalho4.jpg', 'http://localhost/sebastiao_alves/index.php?pagina=livros&id=25', '14:24:24 - 14/12/2023', NULL, '7 - Beatriz', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `data_ultimo_acesso` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `apelido`, `login`, `senha`, `data_ultimo_acesso`, `email`) VALUES
(6, 'Joel', 'Lopes', 'joel', '$2y$10$V7pIDFj0wsZVJb19cRqUueBm93dmiFx.kqTdU1EInv/tzObe8j29m', '22:00:58 - 17/12/2023', 'joel95713@gmail.com'),
(8, 'Fabrício', 'Vidal', 'fabricio', '$2y$10$csPtklhvTty0tMwjb4rNG.ifreUmZglbEe/7Owszyu6tGQRuL6jp6', '20:07:00 - 17/12/2023', 'exemplo@email.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `morada` varchar(250) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `instagram` varchar(1000) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `linkedin` varchar(1000) NOT NULL,
  `horario` varchar(300) NOT NULL,
  `CreatedOn` varchar(200) NOT NULL,
  `UpdatedOn` varchar(200) NOT NULL,
  `CreatedBy` varchar(200) NOT NULL,
  `UpdatedBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `morada`, `telefone`, `email`, `instagram`, `facebook`, `linkedin`, `horario`, `CreatedOn`, `UpdatedOn`, `CreatedBy`, `UpdatedBy`) VALUES
(1, 'Rua Fictícia, 123 Cidade Imaginária País dos Sonhos', '+123 456 7890', 'exemplo@email.com', 'https://instagram.com', 'https://www.facebook.com/', 'https://www.linkedin.com', 'Segunda a Sexta das 11:00h às 18:00h', '', '19:37:44 - 17/12/2023', '', '7 -  Beatriza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `id_livros` int(11) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `id_livros`, `observacao`) VALUES
(1, 2, 'Novo Lançamento'),
(2, 3, 'Mais vendido'),
(3, 1, 'Promoção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `imagem_bem_vindo` varchar(1000) NOT NULL,
  `texto_ultimos_livros` longtext NOT NULL,
  `CreatedOn` varchar(200) NOT NULL,
  `UpdatedOn` varchar(200) NOT NULL,
  `CreatedBy` varchar(200) NOT NULL,
  `UpdatedBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `imagem_bem_vindo`, `texto_ultimos_livros`, `CreatedOn`, `UpdatedOn`, `CreatedBy`, `UpdatedBy`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/FOTO-editada.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC “At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id e<i>st laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Tem</i>poribus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.” 1914 translation by H. Rackham\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '', '23:30:06 - 13/12/2023', '', '7 - Beatriz');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `texto` longtext NOT NULL,
  `data_noticia` date DEFAULT NULL,
  `UpdatedOn` varchar(200) DEFAULT NULL,
  `UpdatedBy` varchar(200) DEFAULT NULL,
  `CreatedOn` varchar(200) DEFAULT NULL,
  `CreatedBy` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `titulo`, `imagem`, `texto`, `data_noticia`, `UpdatedOn`, `UpdatedBy`, `CreatedOn`, `CreatedBy`) VALUES
(2, 'NOTÍCIA 11', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-08', '19:43:41 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(3, 'NOTÍCIA 1', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-01', '19:39:10 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(7, 'NOTÍCIA 6', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa1@2x.jpg', '<p>Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro “O velho que pensava que fugia”, de Sebastião Alves. Nesta sessão o autor irá ler algumas das passagens do livro. “Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos? De que foge? Que procura? Quem o persegue? Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros? Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média? E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencontrado amor?” “Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011.” Notícia de Técnico Lisboa https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/</p>', '2023-12-06', '19:41:41 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(9, 'NOTÍCIA 3', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-03', '19:39:27 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(11, 'NOTÍCIA 7', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro “O velho que pensava que fugia”, de Sebastião Alves. Nesta sessão o autor irá ler algumas das passagens do livro. “Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos? De que foge? Que procura? Quem o persegue? Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros? Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média? E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencontrado amor?” “Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011.” Notícia de Técnico Lisboa https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/</p>', '2023-12-07', '19:50:53 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(12, 'NOTÍCIA 10', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-08', '19:43:35 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(13, 'NOTÍCIA 2', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-02', '19:39:18 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(15, 'NOTÍCIA 8', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa1@2x.jpg', '<p>Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro “O velho que pensava que fugia”, de Sebastião Alves. Nesta sessão o autor irá ler algumas das passagens do livro. “Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos? De que foge? Que procura? Quem o persegue? Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros? Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média? E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencontrado amor?” “Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011.” Notícia de Técnico Lisboa https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/</p>', '2023-12-08', '19:42:09 - 17/12/2023', '7 -  Beatriza', NULL, NULL),
(16, 'NOTÍCIA 9', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-17', '22:13:44 - 17/12/2023', '6 - Joel', NULL, NULL),
(17, 'NOTÍCIA 4', 'http://localhost/sebastiao_alves/uploads/desktop/conteudo-imprensa2@2x.jpg', '<p>Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC \"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\" 1914 translation by H. Rackham \"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '2023-12-04', '19:39:48 - 17/12/2023', '7 -  Beatriza', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(1000) NOT NULL,
  `UpdatedOn` varchar(255) DEFAULT NULL,
  `CreatedOn` varchar(255) DEFAULT NULL,
  `CreatedBy` varchar(200) DEFAULT NULL,
  `UpdatedBy` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `texto`, `imagem`, `UpdatedOn`, `CreatedOn`, `CreatedBy`, `UpdatedBy`) VALUES
(1, 'Senhora do Amor e da Guerra', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"a</p>', 'http://localhost/sebastiao_alves/uploads/desktop/livro-conteudo.jpg', '22:16:29 - 17/12/2023', '', NULL, '6 - Joel'),
(2, 'O caracol estrábico', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 'http://localhost/sebastiao_alves/uploads/desktop/livro-conteudo3.jpg', '23:17:09 - 14/12/2023', '', NULL, '6 - Joel'),
(3, 'O colecionador de Amnésias', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 'http://localhost/sebastiao_alves/uploads/desktop/livro-conteudo2.jpg', '23:17:16 - 14/12/2023', '', NULL, '6 - Joel'),
(25, 'O velho que pensava que fugia', '<p>\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p>', 'http://localhost/sebastiao_alves/uploads/desktop/livro-conteudo4.jpg', '23:17:40 - 14/12/2023', '18:25:51 - 03/12/2023', NULL, '6 - Joel'),
(33, '', '', '', NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
