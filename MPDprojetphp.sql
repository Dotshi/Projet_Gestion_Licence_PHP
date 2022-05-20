CREATE DATABASE IF NOT EXISTS `Gestion_licence_php_nm`;

create table `LigueRegionale`
(`id_ligueregionale` int(11) not null AUTO_INCREMENT,
 `nom` varchar(50) not null,
 `cp` varchar(6) not null,
 `ville` varchar(50) not null,
 `rue` varchar (50) not null,
 `email` varchar(50) not null,
 primary key (id_ligueregionale)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 create table `CentredeBowling`
(`id_centredebowling` int(11) not null AUTO_INCREMENT,
 `denomination` varchar(50) not null,
 primary key (id_centredeBowling)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 create table `Club`
(`id_club` int (11) not null AUTO_INCREMENT,
 `nom` varchar(50) not null,
 `cp` int(6) not null,
 `ville` varchar(50) not null,
 `rue` varchar(50),
 `email` varchar(50) not null,
 `ref_ligueregionale` int (11) not null,
 `ref_centredebowling` int (11) not null,
 primary key (id_club)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 create table `Categorie`
(`id_categorie` int(11) not null AUTO_INCREMENT,
 `libelle` varchar(50) not null,
 `ageMin` varchar(50) not null,
 `ageMax` varchar(50) not null,
 primary key (id_categorie)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 create table `Licence`
(`id_licence` int(11) not null AUTO_INCREMENT,
 `annee` varchar(50) not null,
 `ref_club` int(11) not null,
 `ref_pratiquant` int(11) not null,
 `ref_licencejeune` varchar(11),
 `ref_entreprise` int(11) not null,
 `ref_licencemixte` int(11) not null,
 primary key (id_licence)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 create table `LicenceJeune`
(`id_licenceJeune` int(11) not null AUTO_INCREMENT,
 `NomResp` varchar(50) not null,
 `prenomResp` varchar(50) not null,
 `telResp` varchar(50) not null,
 `ref_licence` int(11),
 primary key (id_licenceJeune)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 create table `LicenceMixte`
(`id_licencemixte` int(11) not null AUTO_INCREMENT,
 `ref_licence` varchar(50) not null,
 primary key (id_licencemixte)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 create table `Pratiquant`
(`id_pratiquant` int(11) not null AUTO_INCREMENT,
 `nom` varchar(50) not null,
 `prenom` varchar(50) not null,
 `cp` int(11) not null,
 `rue` varchar(50),
 `email` varchar(50) not null,
 primary key (id_pratiquant)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;
 
 create table `Entreprise`
(`id_entreprise` int(11) not null AUTO_INCREMENT,
 `nom` varchar(50) not null,
 `cp` int(11) not null,
 `ville` varchar(50) not null,
 `rue` varchar(11) not null,
 `email` varchar(11) not null,
 primary key (id_entreprise)
 )ENGINE=InnoDB DEFAULT CHARSET=utf8;