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
    // db_close($conn);
    
    return $players;
}

function get_student_by_id($id) {
    $query = "SELECT * FROM players WHERE PlayerID = ?";
    $stmt = prepare_sql_query($conn, $query, [$id]);
    
    if (!$stmt) {
        db_close($conn);
        return false;
    }
    
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $player = mysqli_fetch_assoc($result);
    
    mysqli_stmt_close($stmt);
    db_close($conn);
    
    return $player;
}
?>