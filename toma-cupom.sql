-- ===================================================
-- BANCO DE DADOS: TOMA CUPOM
-- ===================================================

-- =========================
-- TABELA: LOJAS
-- =========================
CREATE TABLE lojas (
    id_loja                 BIGINT AUTO_INCREMENT PRIMARY KEY,          -- ID DA LOJA
    nome                    VARCHAR(150) NOT NULL,                      -- NOME DA LOJA
    titulo                  VARCHAR(255) NOT NULL,                      -- TÍTULO H1 QUE VAI NO HEADER DA PÁGINA (EX.:CUPONS ADIDAS, CUPONS DE DESCONTOS AMAZON)
    descricao               VARCHAR(255) NOT NULL,                      -- DESCRIÇÃO QUE VAI NO HEADER DA PÁGINA (EX.:ENCONTRE OS MELHORES CUPONS DE DESCONTO NETSHOES AQUI ABAIXO)
    url_base_afiliado       VARCHAR(255),                               -- URL DE AFILIADO (URL BASE, SEM ROTAS, LINK AFILIADO DA PÁGINA INICIAL DA LOJA)
    texto_seo               MEDIUMTEXT,                                 -- HTML PARA SEO
    logo                    TEXT,                                       -- LINK PARA IMAGEM DA LOJA
    created_at              TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at              TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- =========================
-- TABELA: CUPONS
-- =========================
CREATE TABLE cupons (
    id_cupom        BIGINT AUTO_INCREMENT PRIMARY KEY,                  -- ID DO CUPOM
    id_loja         BIGINT NOT NULL,                                    -- ID DA LOJA
    titulo          VARCHAR(255) NOT NULL,                              -- TÍTULO DO CUPOM
    descricao       TEXT,                                               -- DESCRIÇÃO DO CUPOM
    regras          TEXT,                                               -- REGRAS
    codigo          VARCHAR(50),                                        -- CÓDIGO
    data_expiracao  DATE,                                               -- DATA DE EXPIRAÇÃO
    link_redirecionamento VARCHAR(255),                                 -- LINK DE AFILIADO
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
CREATE INDEX idx_cupons_loja            ON cupons (id_loja);
CREATE INDEX idx_cupons_data            ON cupons (data_expiracao);
CREATE INDEX idx_cupons_loja_data       ON cupons (id_loja, data_expiracao);
CREATE INDEX idx_cupons_data_loja       ON cupons (data_expiracao, id_loja);

-- Índices para Ofertas
CREATE INDEX idx_ofertas_loja           ON ofertas (id_loja);
CREATE INDEX idx_ofertas_data           ON ofertas (data_expiracao);
CREATE INDEX idx_ofertas_loja_data      ON cupons (id_loja, data_expiracao);
CREATE INDEX idx_ofertas_data_loja      ON cupons (data_expiracao, id_loja);


