<?php
require_once __DIR__ . '/../config/db.php';


function get_all_players($conn) {
    
    $query = "SELECT PlayerID, Name, Photo, Position, Rating FROM players ORDER BY Name";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        error_log("Erreur de requête : " . mysqli_error($conn));
        // db_close($conn);
        return [];
    }
    
    $players = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // db_close($conn);
    
    return $players;
}


?>