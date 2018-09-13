DROP DATABASE IF EXISTS CardBase;
CREATE DATABASE CardBase;
use CardBase;

CREATE TABLE User(
    id int primary key auto_increment,
    FirstName varchar(35),
    LastName varchar(35),
    Comp_Pos varchar(50),
    Phone varchar(20),
    Email varchar(50),
    Color varchar(15),
    Picture varchar(50)

)