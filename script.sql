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



