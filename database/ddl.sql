CREATE SCHEMA v4_automotive DEFAULT CHARACTER SET UTF8;

USE v4_automotive;

CREATE TABLE Clientes (
    cliente_id INT NOT NULL AUTO_INCREMENT,
    ender_id INT NOT NULL,
    nome VARCHAR(90) NOT NULL,
    cpf VARCHAR(13) NOT NULL,
    email VARCHAR(90) NOT NULL,
    telefone VARCHAR(13) NOT NULL,
    avatar VARCHAR(90),

    PRIMARY KEY (cliente_id),
    CONSTRAINT fk_ender_id FOREIGN KEY (ender_id)
        REFERENCES Enders (ender_id)
);

CREATE TABLE Produtos (
    produto_id INT NOT NULL AUTO_INCREMENT,
    categoria_id INT NOT NULL,
    img VARCHAR(90),
    unidade INT,
    preco FLOAT,
    descricao TEXT,
    obs VARCHAR(100),
    
    PRIMARY KEY (produto_id),
    CONSTRAINT fk_categoria_id FOREIGN KEY (categoria_id)
        REFERENCES Categorias (categoria_id)
);

CREATE TABLE Categorias (
    categoria_id INT AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL UNIQUE,
    
    PRIMARY KEY (categoria_id)
);

CREATE TABLE Enders (
    ender_id INT NOT NULL AUTO_INCREMENT,
    estado VARCHAR(50) NOT NULL,
    municipio VARCHAR(50) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    rua VARCHAR(50) NOT NULL,
    zipcode CHAR(8) NOT NULL,
    logradouro VARCHAR(50) NOT NULL,
    
    PRIMARY KEY (ender_id)
);

CREATE TABLE Vendas (
    venda_id INT NOT NULL AUTO_INCREMENT,
    cliente_id INT NOT NULL,
    produto_id INT NOT NULL,
    dt_venda date NOT NULL,
    hora datetime NOT NULL,
    valor float  NOT NULL,
    
    PRIMARY KEY (venda_id),
    CONSTRAINT fk_cliente_id FOREIGN KEY (cliente_id)
        REFERENCES Clientes (cliente_id),
    CONSTRAINT fk_produto_id FOREIGN KEY (produto_id)
        REFERENCES Produtos (produto_id)
);
