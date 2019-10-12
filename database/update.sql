create schema  if not exists helpdesk;

create table helpdesk.pc_regristratie(
id int auto_increment ,
merk char(20),
ram int(255) check( ram >= 4),
cpu char(20),
storage_type char(20),
storage_amount char(20), 

constraint PK_regristratie PRIMARY KEY (id, merk)
);

CREATE TABLE helpdesk.reserveringen(
    id INT AUTO_INCREMENT,
    naam CHAR(20),
    afdeling CHAR(20),
    datum_gebruik DATE,
    datum_terug DATE check(datum_terug >= datum_gebruik),
    gewenste_apparaat CHAR(20),
    bijzonderheden VARCHAR(50),
    getest_door CHAR(20),
    datum_test DATE,
    
    constraint PK_reserveringen PRIMARY KEY (id, naam, afdeling)
);

