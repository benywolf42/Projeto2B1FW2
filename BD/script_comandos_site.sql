-- COMANDOS PARA O SITE

-- CADASTRANDO USUARIO
insert into Usuario values 
(null, 'nome completo', 'usuario', 'senha+salt em MD5', 'email', 'ddd', 'telefone');

-- CADASTRANDO ENDERECO
insert into Endereco_Usuario values
(null, 'UF', 'cidade', 'bairro', 'tp de logradouro', 'logradouro', '(INT)_nro', 'complemento', '(INT)_id do respectivo usuario');

-- INSERINDO PET
insert into Pet values
(null, 'nome provisorio', 'cão ou gato', 'cidade', 'UF', 'M ou F', 'P M ou G', 'data de criação', 'descricao do animal', 'outras info', '(INT)_id do usuario responsavel');

-- INSERINDO FOTOS PET
insert into fotosPet values
(null, 'linkFotoPerfil', 'linkFoto1', 'linkFoto2', 'linkFoto3', 'linkFoto4', 'linkFoto5', 'linkFoto6', '(INT)_idPet');


select * from Usuario;

SELECT * FROM PET;

-- drop database mydb;