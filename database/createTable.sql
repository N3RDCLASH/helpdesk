CREATE TABLE reserveringen(
    id INT AUTO_INCREMENT PRIMARY KEY,
    naam CHAR(20),
    afdeling CHAR(20),
    datum_gebruik DATE,
    datum_terug DATE,
    gewenste_apparaat CHAR(20),
    bijzonderheden VARCHAR(20),
    getest_door CHAR(20),
    datum_test CHAR(20)
)