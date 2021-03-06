
CREATE SCHEMA IF NOT EXISTS `fotografo` DEFAULT CHARACTER SET utf8 ;
USE `fotografo` ;

CREATE TABLE tb_administrador(
	id int auto_increment,
    nome varchar(100) not null,
    senha varchar(32) not null,
    primary key (id)
    );
select * from tb_administrador;

CREATE TABLE IF NOT EXISTS `fotografo`.`tb_album` (
  `id_album` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `id_tag` INT,
  `selecionado` INT(1),
  `descricao` VARCHAR(200) NULL,
  PRIMARY KEY (`id_album`))
;
select * from tb_album;

 SET foreign_key_checks = 0;
 SET foreign_key_checks = 1;
 truncate table tb_contato;

CREATE TABLE IF NOT EXISTS `fotografo`.`tb_foto` (
  `id_foto` INT auto_increment NOT NULL,
  `id_album` INT NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `foto_capa` INT(1) ,
  PRIMARY KEY (`id_foto`),
  INDEX `fk_tb_foto_tb_album_idx` (`id_album` ASC),
  CONSTRAINT `fk_tb_foto_tb_album`
    FOREIGN KEY (`id_album`)
    REFERENCES `fotografo`.`tb_album` (`id_album`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;
select * from tb_foto;

update tb_foto set foto_capa = 1
where id_foto = 2;

CREATE TABLE IF NOT EXISTS `fotografo`.`tb_tag` (
  `id_tag` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tag`));
select * from tb_tag;


/*CREATE TABLE IF NOT EXISTS `fotografo`.`tb_album_tag` (
  `id_album` INT NOT NULL,
  `id_tag` INT NOT NULL,
  PRIMARY KEY (`id_album`, `id_tag`),
  INDEX `fk_tb_album_tag_album_idx` (`id_album` ASC),
  INDEX `fk_tb_album_tag_tag_idx` (`id_tag` ASC),
  CONSTRAINT `fk_tb_album_tag_tag`
    FOREIGN KEY (`id_tag`)
    REFERENCES `fotografo`.`tb_tag` (`id_tag`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_album_tag_album`
    FOREIGN KEY (`id_album`)
    REFERENCES `fotografo`.`tb_album` (`id_album`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
select * from tb_album_tag;*/

 Select tb_album.nome as dir,
         tb_foto.nome as arq
         from tb_album inner join tb_foto
         on tb_album.id_album = tb_foto.id_album
         where tb_foto.foto_capa = 1;

CREATE TABLE tb_contato(
	id_contato int auto_increment,
    email varchar(100) not null,
    instagram varchar(100) not null,
    facebook varchar(100) not null,
    primary key (id_contato)
    );
    drop table tb_contato;
    INSERT INTO tb_contato (email, instagram, facebook) VALUES ("mailto:anderson.aaphoto@gmail.com?subject=feedback", "https://www.instagram.com/a.a_photografia/", "https://www.facebook.com/anderson.a.a.foto");
	select * from tb_contato;

    
    CREATE TABLE tb_sobre(
	id_sobre int auto_increment,
    texto varchar(200) not null,
    foto varchar(100) not null,
    primary key (id_sobre)
    );
    select * from tb_sobre;
    
