create schema if not exists helpdesk;
create table helpdesk.pc_regristratie(
  id int auto_increment,
  merk char(20),
  ram int(255) check(ram >= 4),
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
create table helpdesk.user(
  user_id int auto_increment,
  naam char(255),
  locatie char(255),
  constraint PK_user PRIMARY KEY (user_id, naam)
);
create table helpdesk.hardware(
  hardware_id int auto_increment,
  user_id int,
  model char(255),
  type char(255),
  serienummer char(255),
  type_geheugen char(20),
  aantal_geheugen int,
  interne_geheugen int,
  aanwezige_kaarten char(20),
  constraint PK_hardware PRIMARY KEY(hardware_id, user_id),
  constraint FK_user FOREIGN KEY(user_id) references user(user_id)
);
create table helpdesk.operating_system(
  os_id int auto_increment,
  hardware_id int,
  type_os char(25),
  os_versie char(25),
  os_release date,
  os_licentienummer char(20),
  constraint PK_os PRIMARY KEY (os_id, type_os),
  constraint FK_hardware FOREIGN KEY (hardware_id) references hardware(hardware_id)
);
create table helpdesk.software(
  software_id int auto_increment,
  hardware_id int,
  software_naam char(20),
  software_versie char(20),
  software_licentie char(20),
  constraint PK_SO PRIMARY KEY(software_id, software_naam),
  constraint FK_software FOREIGN KEY(hardware_id) references hardware(hardware_id)
);
create table helpdesk.randapparatuur(
  apparaat_id int auto_increment,
  type char(20),
  merk char(20),
  model char(20),
  serienummer char(20),
  constraint PK_RR PRIMARY KEY(apparaat_id, type)
);
create table helpdesk.admin_gegevens(
  product_id int auto_increment,
  aanschaf_datum date,
  uitlever_datum date check(uitlever_datum > aanschaf_datum),
  aanschaf_prijs double check(aanschaf_prijs > 0.0),
  status char(20),
  leveancier char(20),
  afschrijving char(20),
  generatie int,
  contact_persoon char(20),
  constraint PK_AG PRIMARY KEY (product_id, aanschaf_datum, uitlever_datum)
);