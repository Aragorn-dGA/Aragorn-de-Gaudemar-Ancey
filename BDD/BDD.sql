create TABLE P_PROJET (
    id_projet int primary key AUTO_INCREMENT, 
    titre varchar(20) not null,
    date_debut date null,
    commentaires text null
    );
    
create TABLE P_PROJET (
    id_competances int primary key AUTO_INCREMENT, 
    nom varchar(20) not null
    );
    
Create table P_LIAISON (
	id_projet int primary key not null,
    id_competances int not null,
    constraint fk_lia_pro foreign key(id_projet) references P_PROJET(id_projet),
    constraint fk_lia_com foreign key(id_competances) references P_COMPETANCES(id_competances)
	);

Create User 'Alan'@'Localhost' identified by 'P4ssw@rd';

Grant Select On p_projet to 'Alan'@'localhost';
Grant Select On p_liaison to 'Alan'@'localhost';
Grant Select On p_competances to 'Alan'@'localhost';

insert into p_projet (id_projet, titre, date_debut, commentaires) values (1, 'Portfolio', '2024-10-01', 'Premier teste d\'insertion');
insert into p_projet (id_projet, titre, date_debut, commentaires) values (2, 'AD', '2024-10-01', 'test des colonnes');
insert into p_projet (id_projet, titre, date_debut, commentaires) values (3, 'PC', '2024-10-01', 'test des colonnes');
