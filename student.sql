CREATE TABLE student
(
    id INTEGER NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50),
    city VARCHAR(50) NOT NULL,
    semester INTEGER NOT NULL,
    PRIMARY KEY(id)
)
ENGINE InnoDB;

INSERT INTO student(first_name, last_name, city, semester)
VALUES ('Juan', 'Perez', 'Cochabamba', 3);

INSERT INTO student(first_name, last_name, city, semester)
VALUES ('Jorge', 'Lopez', 'La Paz', 5);

INSERT INTO student(first_name, last_name, city, semester)
VALUES ('Elmer', 'Carrasco', 'Santa Cruz', 1);

INSERT INTO student(first_name, last_name, city, semester)
VALUES ('John', 'Smith', 'Cochabamba', 7);

