CREATE DATABASE FootballDB;
 USE FootballDB;

 
CREATE TABLE Club (
    ClubID INT PRIMARY KEY,
    ClubName VARCHAR(100),
    Logo VARCHAR(255)
);


CREATE TABLE Country (
    CountryID INT PRIMARY KEY,
    CountryName VARCHAR(100),
    Flag VARCHAR(255)
);


CREATE TABLE Players (
    PlayerID INT PRIMARY KEY,
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
    PlayerID INT PRIMARY KEY,
    Pace INT,
    Shooting INT,
    Passing INT,
    Dribbling INT,
    Defending INT,
    Physical INT,
    FOREIGN KEY (PlayerID) REFERENCES Players(PlayerID)
);

CREATE TABLE Goalkeeper (
    PlayerID INT PRIMARY KEY,
    Diving INT,
    Handling INT,
    Kicking INT,
    Reflexes INT,
    Speed INT,
    Positioning INT,
    FOREIGN KEY (PlayerID) REFERENCES Players(PlayerID)
);


INSERT INTO Club (ClubID, ClubName, Logo)
VALUES 
(1, 'Real Madrid', 'real_madrid_logo.png'),
(2, 'FC Barcelona', 'fc_barcelona_logo.png'),
(3, 'Manchester United', 'manchester_united_logo.png');


INSERT INTO Country (CountryID, CountryName, Flag)
VALUES 
(1, 'Spain', 'spain_flag.png'),
(2, 'France', 'france_flag.png'),
(3, 'England', 'england_flag.png');


INSERT INTO Players (PlayerID, Name, Photo, Position, Rating, CountryID, ClubID)
VALUES 
(1, 'Karim Benzema', 'benzema_photo.png', 'Forward', 91, 2, 1),
(2, 'Marc-André ter Stegen', 'ter_stegen_photo.png', 'Goalkeeper', 90, 1, 2),
(3, 'Marcus Rashford', 'rashford_photo.png', 'Forward', 88, 3, 3);




INSERT INTO Player (PlayerID, Pace, Shooting, Passing, Dribbling, Defending, Physical)
VALUES 
(1, 78, 86, 81, 84, 40, 76),
(3, 92, 85, 78, 89, 45, 80);


INSERT INTO Goalkeeper (PlayerID, Diving, Handling, Kicking, Reflexes, Speed, Positioning)
VALUES 
(2, 85, 90, 87, 88, 55, 89);

INSERT INTO Players (PlayerID, Name, Photo, Position, Rating, CountryID, ClubID)
VALUES 
(4, 'Thibaut Courtois', 'courtois_photo.png', 'Goalkeeper', 91, 2, 1),
(5, 'Virgil van Dijk', 'vandijk_photo.png', 'Defender', 89, 3, 3),
(6, 'Kylian Mbappé', 'mbappe_photo.png', 'Forward', 93, 2, 2);




INSERT INTO Player (PlayerID, Pace, Shooting, Passing, Dribbling, Defending, Physical)
VALUES 
(5, 75, 60, 70, 68, 92, 86), 
(6, 97, 89, 80, 94, 38, 75); 


INSERT INTO Goalkeeper (PlayerID, Diving, Handling, Kicking, Reflexes, Speed, Positioning)
VALUES 
(4, 89, 92, 85, 88, 50, 90);