
CREATE TYPE status_dispositivo AS ENUM ('ativo', 'inativo');
CREATE TYPE status_pergunta AS ENUM ('ativa', 'inativa');

CREATE TABLE setores (
    id_setor SERIAL PRIMARY KEY,
    nome_setor VARCHAR(255) NOT NULL
);

CREATE TABLE dispositivos (
    id_dispositivo SERIAL PRIMARY KEY,
    nome_dispositivo VARCHAR(255) NOT NULL,
    status status_dispositivo NOT NULL DEFAULT 'ativo'
);

CREATE TABLE perguntas (
    id_pergunta SERIAL PRIMARY KEY,
    texto_pergunta TEXT NOT NULL,
    status status_pergunta NOT NULL DEFAULT 'ativa'
);

CREATE TABLE usuarios_administrativos (
    id_usuario_admin SERIAL PRIMARY KEY,
    login VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL -- IMPORTANTE: Armazene a senha como um HASH (ex: bcrypt), não texto puro.
);

CREATE TABLE avaliacoes (
    id_avaliacao SERIAL PRIMARY KEY,
    id_setor INT NOT NULL,
    id_pergunta INT NOT NULL,
    id_dispositivo INT NOT NULL,
    resposta SMALLINT NOT NULL CHECK (resposta >= 0 AND resposta <= 10),
    feedback_textual TEXT,
    data_hora_avaliacao TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_setor
        FOREIGN KEY (id_setor)
        REFERENCES setores(id_setor),

    CONSTRAINT fk_pergunta
        FOREIGN KEY (id_pergunta)
        REFERENCES perguntas(id_pergunta),

    CONSTRAINT fk_dispositivo
        FOREIGN KEY (id_dispositivo)
        REFERENCES dispositivos(id_dispositivo)
);