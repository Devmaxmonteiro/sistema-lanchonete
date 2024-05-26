CREATE DATABASE IF NOT EXISTS lanchonete;
USE lanchonete;

CREATE TABLE IF NOT EXISTS pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    produto VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Índices para melhorar performance nas consultas
CREATE INDEX idx_nome ON pedidos(nome);
CREATE INDEX idx_produto ON pedidos(produto);
