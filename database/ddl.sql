/*
* | Criar Banco de Dados | *
*/
CREATE SCHEMA v4_automotive DEFAULT CHARACTER SET UTF8;


/*
* | Selecionar o Banco de Dados  | *
*/
USE v4_automotive;


/*
* | Criar Tabelas  | *
*/

-- @ criar tabela categorias (referente aos produtos)
CREATE TABLE Categorias (
    -- columns
    categoria_id INT AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL UNIQUE,

    -- # constraint
    PRIMARY KEY (categoria_id)
);

-- @ criar tabela enders
CREATE TABLE Enders (
    -- columns
    ender_id INT NOT NULL AUTO_INCREMENT,
    estado VARCHAR(50) NOT NULL,
    municipio VARCHAR(50) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    rua VARCHAR(50) NOT NULL,
    zipcode CHAR(8) NOT NULL,
    logradouro VARCHAR(50) NOT NULL,

    -- # constraint
    PRIMARY KEY (ender_id)
);

-- @ criar tabela clientes
CREATE TABLE Clientes (
    -- # columns
    cliente_id INT NOT NULL AUTO_INCREMENT,
    ender_id INT NOT NULL,
    nome VARCHAR(90) NOT NULL,
    cpf VARCHAR(13) NOT NULL,
    email VARCHAR(90) NOT NULL,
    telefone VARCHAR(13) NOT NULL,
    avatar VARCHAR(90),

    -- # constraint
    PRIMARY KEY (cliente_id),
    CONSTRAINT fk_ender_id FOREIGN KEY (ender_id)
        REFERENCES Enders (ender_id)
);

-- @ criar tabela produtos
CREATE TABLE Produtos (
    -- columns
    produto_id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    img VARCHAR(90),
    categoria_id INT NOT NULL,
    unidade INT,
    preco FLOAT,
    descricao TEXT,
    obs VARCHAR(100),

    -- # constraint
    PRIMARY KEY (produto_id),
    CONSTRAINT fk_categoria_id FOREIGN KEY (categoria_id)
        REFERENCES Categorias (categoria_id)
);

-- @ criar tabela categorias (referente aos produtos)
CREATE TABLE PesquisasRapidas (
    -- columns
    pesquisa_rapida_id INT AUTO_INCREMENT,
    termo VARCHAR(30) NOT NULL UNIQUE,

    -- # constraint
    PRIMARY KEY (pesquisa_rapida_id)
    CONSTRAINT fk_produto_id FOREIGN KEY (produto_id)
        REFERENCES Produtos (produto_id)
);

-- @ criar tabela vendas
CREATE TABLE Vendas (
    -- # columns
    venda_id INT NOT NULL AUTO_INCREMENT,
    cliente_id INT NOT NULL,
    produto_id INT NOT NULL,
    dt_venda date NOT NULL,
    hora datetime NOT NULL,
    valor float  NOT NULL,

    -- # constraint
    PRIMARY KEY (venda_id),
    CONSTRAINT fk_cliente_id FOREIGN KEY (cliente_id)
        REFERENCES Clientes (cliente_id),
    CONSTRAINT fk_produto_id FOREIGN KEY (produto_id)
        REFERENCES Produtos (produto_id)
);
