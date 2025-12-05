
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
    senha VARCHAR(255) NOT NULL
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



INSERT INTO perguntas (id_pergunta, texto_pergunta, status) VALUES
(1, 'Qual sua satisfação geral com o atendimento recebido?', 'ativa'),
(2, 'Você ficou satisfeito com a limpeza e organização do ambiente?', 'ativa'),
(3, 'A qualidade dos produtos/serviços atendeu às suas expectativas?', 'ativa'),
(4, 'O tempo de espera para ser atendido foi adequado?', 'ativa'),
(5, 'Nossos funcionários foram cordiais e prestativos?', 'ativa'),
(6, 'Você encontrou facilidade em usar nossos dispositivos de avaliação?', 'ativa'),
(7, 'Você recomendaria nosso estabelecimento a um amigo ou familiar?', 'ativa'),
(8, 'Qual sua percepção sobre o custo-benefício dos nossos serviços/produtos?', 'ativa'),
(9, 'Houve algum aspecto que te deixou insatisfeito durante sua visita?', 'ativa'),
(10, 'Como você avalia a facilidade de acesso e localização do estabelecimento?', 'ativa');



INSERT INTO dispositivos (id_dispositivo, nome_dispositivo, status) VALUES
(1, 'Dispositivo principal', 'ativo');

INSERT INTO setores (id_setor, nome_setor) VALUES
(1, 'Setor teste');


