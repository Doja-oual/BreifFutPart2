CREATE DATABASE FootballDB;
 USE FootballDB;

 
CREATE TABLE Club (
    ClubID INT PRIMARY KEY AUTO_INCREMENT,
    ClubName VARCHAR(100),
    Logo VARCHAR(255)
);


CREATE TABLE Country (
    CountryID INT PRIMARY KEY AUTO_INCREMENT,
    CountryName VARCHAR(100),
    Flag VARCHAR(255)
);


CREATE TABLE Players (
    PlayerID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(100),
    Photo VARCHAR(255),
    Position VARCHAR(50),
    Rating INT,
    CountryID INT, 
    ClubID INT, 
    FOREIGN KEY (CountryID) REFERENCES Country(CountryID),
    FOREIGN KEY (ClubID) REFERENCES Club(ClubID)
);
CREATE TABLE Player (
    PlayerID INT PRIMARY KEY AUTO_INCREMENT,
    Pace INT,
    Shooting INT,
    Passing INT,
    Dribbling INT,
    Defending INT,
    Physical INT,
    FOREIGN KEY (PlayerID) REFERENCES Players(PlayerID)
);

CREATE TABLE Goalkeeper (
    PlayerID INT PRIMARY KEY AUTO_INCREMENT,
    Diving INT,
    Handling INT,
    Kicking INT,
    Reflexes INT,
    Speed INT,
    Positioning INT,
    FOREIGN KEY (PlayerID) REFERENCES Players(PlayerID)
);


INSERT INTO Club ( ClubName, Logo)
VALUES 
( 'Real Madrid', 'real_madrid_logo.png'),
( 'FC Barcelona', 'fc_barcelona_logo.png'),
( 'Manchester United', 'manchester_united_logo.png');


INSERT INTO Country ( CountryName, Flag)
VALUES 
( 'Spain', 'spain_flag.png'),
( 'France', 'france_flag.png'),
( 'England', 'england_flag.png');


INSERT INTO Players ( Name, Photo, Position, Rating, CountryID, ClubID)
VALUES 
( 'Karim Benzema', 'benzema_photo.png', 'Forward', 91, 2, 1),
( 'Marc-André ter Stegen', 'ter_stegen_photo.png', 'Goalkeeper', 90, 1, 2),
( 'Marcus Rashford', 'rashford_photo.png', 'Forward', 88, 3, 3);




INSERT INTO Player ( Pace, Shooting, Passing, Dribbling, Defending, Physical)
VALUES 
( 78, 86, 81, 84, 40, 76),
( 92, 85, 78, 89, 45, 80);


INSERT INTO Goalkeeper ( Diving, Handling, Kicking, Reflexes, Speed, Positioning)
VALUES 
( 85, 90, 87, 88, 55, 89);

INSERT INTO Players ( Name, Photo, Position, Rating, CountryID, ClubID)
VALUES 
( 'Thibaut Courtois', 'courtois_photo.png', 'Goalkeeper', 91, 2, 1),
( 'Virgil van Dijk', 'vandijk_photo.png', 'Defender', 89, 3, 3),
( 'Kylian Mbappé', 'mbappe_photo.png', 'Forward', 93, 2, 2);




INSERT INTO Player ( Pace, Shooting, Passing, Dribbling, Defending, Physical)
VALUES 
( 75, 60, 70, 68, 92, 86), 
( 97, 89, 80, 94, 38, 75); 


INSERT INTO Goalkeeper ( Diving, Handling, Kicking, Reflexes, Speed, Positioning)
VALUES 
( 89, 92, 85, 88, 50, 90);

