-- ===================================================
-- BANCO DE DADOS: TOMA CUPOM
-- ===================================================

-- CRIA O BANCO DE DADOS COM O NOME 'toma_cupom'
CREATE DATABASE IF NOT EXISTS toma_cupom
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_unicode_ci;

USE toma_cupom;

-- =========================
-- TABELA: LOJAS
-- =========================
CREATE TABLE lojas (
    id_loja         BIGINT AUTO_INCREMENT PRIMARY KEY,
    nome            VARCHAR(150) NOT NULL,      
    slug            VARCHAR(150) UNIQUE NOT NULL,               -- usado nas URLs amigáveis
    url_oficial     VARCHAR(255),                               -- site real da loja
    texto_seo       TEXT,                                       -- HTML para SEO
    logo            VARCHAR(255),                               -- link para imagem da loja
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- =========================
-- TABELA: CUPONS
-- =========================
CREATE TABLE cupons (
    id_cupom        BIGINT AUTO_INCREMENT PRIMARY KEY,
    id_loja         BIGINT NOT NULL,
    titulo          VARCHAR(255) NOT NULL,
    descricao       TEXT,
    regras          TEXT,
    codigo          VARCHAR(50),                    -- código do cupom
    data_expiracao  DATE,
    link_redirecionamento VARCHAR(255),             -- link de afiliado
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_loja) REFERENCES lojas(id_loja) ON DELETE CASCADE
);

-- =========================
-- TABELA: OFERTAS
-- =========================
CREATE TABLE ofertas (
    id_oferta       BIGINT AUTO_INCREMENT PRIMARY KEY,
    id_loja         BIGINT NOT NULL,
    titulo          VARCHAR(255) NOT NULL,
    descricao       TEXT,
    data_expiracao  DATE,
    link_oferta     VARCHAR(255) NOT NULL,          -- link da oferta
    imagem          VARCHAR(255),                   -- link da imagem
    created_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_loja) REFERENCES lojas(id_loja) ON DELETE CASCADE
);

-- =========================
-- TABELA: CATEGORIAS
-- =========================
CREATE TABLE categorias (
    id_categoria    BIGINT AUTO_INCREMENT PRIMARY KEY,
    nome            VARCHAR(100) NOT NULL,
    slug            VARCHAR(100) UNIQUE NOT NULL
);

-- =========================
-- TABELA: LOJA_CATEGORIA (N:N)
-- =========================
CREATE TABLE loja_categoria (
    id_loja         BIGINT NOT NULL,
    id_categoria    BIGINT NOT NULL,
    PRIMARY KEY (id_loja, id_categoria),
    FOREIGN KEY (id_loja) REFERENCES lojas(id_loja) ON DELETE CASCADE,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria) ON DELETE CASCADE
);

-- =========================
-- ÍNDICES ADICIONAIS
-- =========================

-- Índices para Cupons
CREATE INDEX idx_cupons_loja       ON cupons (id_loja);
CREATE INDEX idx_cupons_data       ON cupons (data_expiracao);

-- Índices para Ofertas
CREATE INDEX idx_ofertas_loja      ON ofertas (id_loja);
CREATE INDEX idx_ofertas_data      ON ofertas (data_expiracao);

-- Índices para Categorias (slug já é UNIQUE)
-- Mas podemos reforçar busca por nome também se for usado
CREATE INDEX idx_categorias_nome   ON categorias (nome);

-- Índices para Loja_Categoria (já tem PK composta, mas criamos redundância para joins rápidos)
CREATE INDEX idx_loja_categoria_loja      ON loja_categoria (id_loja);
CREATE INDEX idx_loja_categoria_categoria ON loja_categoria (id_categoria);

-- Índices para Lojas (slug já é UNIQUE, mas indexar nome ajuda em buscas)
CREATE INDEX idx_lojas_nome        ON lojas (nome);