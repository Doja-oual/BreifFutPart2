<?php
require_once __DIR__ . '/../config/db.php';


function get_all_players($conn) {
    
    $query = "SELECT *,
    ClubName,CountryName
     FROM players 
    JOIN  club ON players.ClubID = club.ClubID
     JOIN  Country ON players.CountryID = Country.CountryID 

     ORDER BY Name
 ";
    $result = mysqli_query($conn, $query);

    
    if (!$result) {
        error_log("Erreur de requête : " . mysqli_error($conn));
        // db_close($conn);
        return [];
    }
    
    $players = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    
    return $players;
}

function get_all_clubs($conn) {
    
    $query = "SELECT *FROM club ";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        error_log("Erreur de requête : " . mysqli_error($conn));
      
        return [];
    }
    
    $clubs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    
    return $clubs;
}
function get_all_county($conn){
    $query="SELECT * FROM  Country ";
    $result = mysqli_query($conn,$query);
     

     if(!$result){
        error_log("Errur de requet :" . mysqli_error($conn));
        return[];
     }
      $county = mysqli_fetch_all($result,MYSQLI_ASSOC);
      return $county;
}



 ?>
