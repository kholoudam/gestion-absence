-- créer une base de données 
		create database absences;
        use absences;
-- créer la table stagiaires
		create table stagiaires(idstag int,CIN varchar(20),nom varchar(60),prenom varchar(60),phone int,email varchar(60),note int,
		primary key(idstag));
-- créer la table modules
		create table modules(id_module int,nom_module varchar(20),coef int,annee_forma varchar(60),semestre varchar(20),
        masse_horaire varchar(60),nature_eval varchar(40),duree varchar(40),primary key(id_module));
-- créer la table formateurs
		create table formateurs(id_form int,nom varchar(20),prenom int,module varchar(60),filieres varchar(40),primary key(id_form));
-- créer la table absence
		create table absence(jour date,sceance int,justifie varchar(40),annee_forma varchar(60));
-- créer la clé étrangère
		Alter table absence add constraint foreign key(note)references stagiaires(note);
-- procédure d'ajout
		CREATE PROCEDURE Ajoutstagiaire ( )
		BEGIN
			INSERT INTO stagiaires VALUES (CIN,nom,prenom,phone,email,note)
		END $$
		DELIMITER ;
		DROP PROCEDURE IF EXISTS Ajoutstagiaire;
-- procédure de supprimation
		CREATE PROCEDURE DeleteStagiaire ( )
		BEGIN
			select distinct idstag,CIN,nom,prenom,phone,email,note from `stagiaires`
			delete from absences.stagiaires where upper(stagiaires.Nom) like concat('%',upper(v_nom),'%')
		END $$
		DELIMITER ;
		DROP PROCEDURE IF EXISTS DeleteStagiaire;
-- procédure d'affichage par nom
		Drop procedure if exists AfficherParNom;
		delimiter $$
		create procedure AfficherParNom(v_nom text)
		begin
			select * from stagiaires  where upper(stagiaires.Nom) like concat('%',upper(v_nom),'%');
		end $$
		delimiter ;
		call AfficherParNom('kholoud');
-- trigger 
Delimiter $$
Create trigger modif before insert on absence
for each row
Begin
if new.justifie is null then Update absence set note=note-1 where jour=NEW.jour;
Else
Update absence set note=note+0 where jour=NEW.jour;end if;
Insert into absence(jour,sceance,justifie,annee_forma,note) values(NEW.jour, NEW.sceance, NEW.justifie, NEW.annee_forma,NEW.note);
end $$
delimiter ;