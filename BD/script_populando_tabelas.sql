-- CRIANDO USUARIOS

insert into Usuario values 
(null, 'Luisa Mell', 'lu.mell', '44f7865dd86569240496a90cf36bcb69', 'lu.mell@mail.com', '11', '994760123'),
(null, 'Bruno Pernadas', 'bruno.per', '44f7865dd86569240496a90cf36bcb69', 'bruno.per@mail.com', '17', '996152307'),
(null, 'Daniela Indigo', 'dani.ind', '44f7865dd86569240496a90cf36bcb69', 'dani.ind@mail.com', '19', '994879632');

-- CRIANDO ENDEREÇOS

insert into Endereco_Usuario values
(null, 'SP', 'São Paulo', 'Jd. América', 'Rua', 'Acetinada', 1418, 'AP', 1),
(null, 'SP', 'São Paulo', 'Centro', 'Rua', 'Carmim', 25, 'CASA', 2),
(null, 'SP', 'São Paulo', 'Vila Nova', 'Rua', 'Primavera', 134, 'AP', 3);

-- CRIANDO PETS

insert into Pet values
(null, 'Rex', 'cão', 'São Paulo', 'SP', 'M', 'G', '2018-11-24', 'Rex é um cão nada amigável. Ótimo para fazer guarda à noite.', 'Vacinado e castrado.', 1),
(null, 'Kitty', 'gato', 'São Paulo', 'SP', 'F', 'P', '2018-11-08', 'Kitty é uma gata canceriana, super amorosa, mas de personalidade forte.', 'Vacinada e castrada.', 2),
(null, 'Felpudo', 'cão', 'São Paulo', 'SP', 'M', 'P', '2018-11-10', 'Felpudo é extremamente dócil e inteligente. Perfeito pra crianças.', 'Vacinado e castrado.', 3);

-- CRIANDO OS LINKS DE FOTOS

insert into fotosPet values
(null, 'linkPerfil', 1);