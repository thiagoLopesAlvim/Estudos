USE [master]
GO
/****** Object:  Database [laravel]    Script Date: 06/03/2024 14:47:57 ******/
CREATE DATABASE [laravel]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'laravel', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\laravel.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'laravel_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\laravel_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [laravel] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [laravel].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [laravel] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [laravel] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [laravel] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [laravel] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [laravel] SET ARITHABORT OFF 
GO
ALTER DATABASE [laravel] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [laravel] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [laravel] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [laravel] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [laravel] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [laravel] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [laravel] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [laravel] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [laravel] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [laravel] SET  DISABLE_BROKER 
GO
ALTER DATABASE [laravel] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [laravel] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [laravel] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [laravel] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [laravel] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [laravel] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [laravel] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [laravel] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [laravel] SET  MULTI_USER 
GO
ALTER DATABASE [laravel] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [laravel] SET DB_CHAINING OFF 
GO
ALTER DATABASE [laravel] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [laravel] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [laravel] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [laravel] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [laravel] SET QUERY_STORE = OFF
GO
USE [laravel]
GO
/****** Object:  User [phpcon]    Script Date: 06/03/2024 14:47:58 ******/
CREATE USER [phpcon] WITHOUT LOGIN WITH DEFAULT_SCHEMA=[phpcon]
GO
/****** Object:  Table [dbo].[consultas]    Script Date: 06/03/2024 14:47:58 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[consultas](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[tipconsulta] [nvarchar](255) NOT NULL,
	[status] [nvarchar](255) NOT NULL,
	[nomecliente] [nvarchar](255) NOT NULL,
	[telefone] [nvarchar](255) NOT NULL,
	[CPF] [nvarchar](255) NOT NULL,
	[endereco] [nvarchar](255) NOT NULL,
	[observacao] [nvarchar](max) NOT NULL,
	[tippagamento] [nvarchar](255) NOT NULL,
	[dtnascimento] [nvarchar](255) NOT NULL,
	[dtconsulta] [nvarchar](255) NOT NULL,
	[pathImg] [nvarchar](255) NOT NULL,
	[created_at] [varchar](30) NULL,
	[updated_at] [varchar](30) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 06/03/2024 14:47:58 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[failed_jobs](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[uuid] [nvarchar](255) NOT NULL,
	[connection] [nvarchar](max) NOT NULL,
	[queue] [nvarchar](max) NOT NULL,
	[payload] [nvarchar](max) NOT NULL,
	[exception] [nvarchar](max) NOT NULL,
	[failed_at] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 06/03/2024 14:47:58 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[password_reset_tokens]    Script Date: 06/03/2024 14:47:58 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_reset_tokens](
	[email] [nvarchar](255) NOT NULL,
	[token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
 CONSTRAINT [password_reset_tokens_email_primary] PRIMARY KEY CLUSTERED 
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[personal_access_tokens]    Script Date: 06/03/2024 14:47:58 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[personal_access_tokens](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[tokenable_type] [nvarchar](255) NOT NULL,
	[tokenable_id] [bigint] NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[token] [nvarchar](64) NOT NULL,
	[abilities] [nvarchar](max) NULL,
	[last_used_at] [datetime] NULL,
	[expires_at] [datetime] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 06/03/2024 14:47:58 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[email_verified_at] [datetime] NULL,
	[password] [nvarchar](255) NOT NULL,
	[remember_token] [nvarchar](100) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [failed_jobs_uuid_unique]    Script Date: 06/03/2024 14:47:58 ******/
CREATE UNIQUE NONCLUSTERED INDEX [failed_jobs_uuid_unique] ON [dbo].[failed_jobs]
(
	[uuid] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [personal_access_tokens_token_unique]    Script Date: 06/03/2024 14:47:58 ******/
CREATE UNIQUE NONCLUSTERED INDEX [personal_access_tokens_token_unique] ON [dbo].[personal_access_tokens]
(
	[token] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [personal_access_tokens_tokenable_type_tokenable_id_index]    Script Date: 06/03/2024 14:47:58 ******/
CREATE NONCLUSTERED INDEX [personal_access_tokens_tokenable_type_tokenable_id_index] ON [dbo].[personal_access_tokens]
(
	[tokenable_type] ASC,
	[tokenable_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [users_email_unique]    Script Date: 06/03/2024 14:47:58 ******/
CREATE UNIQUE NONCLUSTERED INDEX [users_email_unique] ON [dbo].[users]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
GO
ALTER TABLE [dbo].[failed_jobs] ADD  DEFAULT (getdate()) FOR [failed_at]
GO
ALTER TABLE [dbo].[consultas]  WITH CHECK ADD CHECK  (([status]=N'c' OR [status]=N'p' OR [status]=N'a'))
GO
ALTER TABLE [dbo].[consultas]  WITH CHECK ADD CHECK  (([tippagamento]=N'e' OR [tippagamento]=N'p' OR [tippagamento]=N'c' OR [tippagamento]=N'd'))
GO
USE [master]
GO
ALTER DATABASE [laravel] SET  READ_WRITE 
GO
