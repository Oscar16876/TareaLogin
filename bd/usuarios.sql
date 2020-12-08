
create database login;

use login;

create table usuarios(
				id int auto_increment,
				ConceptoGasto varchar(50),
				CantiddadGasto varchar(50),
				Email date,
				Fecha varchar(50),
				usuario varchar(50),
				password text(50),
				primary key(id)
					);