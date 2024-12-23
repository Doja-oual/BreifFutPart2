<?php
include 'actions.php';
include 'utils.php';
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if($_POST["action"]=="create"){

try{

    $name = $_POST['name'] ?? '';
    $clubID = $_POST['football-club'] ?? '';
    $rating = $_POST['rating'] ?? '';
    $photo = $_POST['profilePhoto'] ?? '' ;
    $position = $_POST['position'] ?? '';
    $countryID = $_POST['nationality'] ?? ''; 
    
    // Statistiques detaie
    $pace = $_POST['pace'] ?? '';
    $shooting = $_POST['shooting'] ?? '';
    $passing = $_POST['passing'] ?? '';
    $dribbling = $_POST['dribbling'] ?? '';
    $defending = $_POST['defending'] ?? '';
    $physical = $_POST['physical'] ?? '';

    // STATISCTIQUE DE GARDIENS
    $Handling= $_POST['handling'];
    $speed= $_POST['speed'];
    $reflexes= $_POST['reflexes'];
    $diving= $_POST['diving'];
    $positioning= $_POST['positioning'];
    $kicking= $_POST['kicking'];



    $query = "INSERT INTO Players (Name, Photo, Position, Rating,CountryID, ClubID) 
    VALUES ( ?, ?, ?, ?, ?, ?)";
   $stmt=prepare_sql_query($conn,$query,[ $name,$photo,$position, $rating,$countryID,$clubID]);
   mysqli_stmt_execute($stmt);
   $playerID = mysqli_insert_id($conn);


    
    echo $playerID;
  

    if( $position === "GK"){
        $queryState = "INSERT INTO Goalkeeper (playerID,Diving, Handling, Kicking, Reflexes, Speed, Positioning) 
        VALUES ( ?,?, ?, ?, ?, ?, ?)";
       $stmtState=prepare_sql_query($conn,$queryState,[ $playerID , $diving,$Handling,$kicking, $reflexes,$speed,$positioning]);
       mysqli_stmt_execute($stmtState);
    }
    else{
        $queryState = "INSERT INTO Player (playerID,Pace, Shooting, Passing, Dribbling, Defending, Physical) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
       $stmtState=prepare_sql_query($conn,$queryState,[ $playerID , $pace,$shooting,$passing, $dribbling,$defending,$physical]);
       mysqli_stmt_execute($stmtState);
    }
    echo "added success";

}

catch (Exception $e) {
             echo "Une erreur est survenue: " . $e->getMessage();
}
}
elseif ($_POST["action"] == "update") {
    try {
        $playerID = intval($_POST['playerID']);
        $name = $_POST['name'] ?? '';
        $clubID = $_POST['football-club'] ?? '';
        $rating = $_POST['rating'] ?? '';
        $photo = $_POST['profilePhoto'] ?? '';
        $position = $_POST['position'] ?? '';
        $countryID = $_POST['nationality'] ?? '';

        $query = "UPDATE Players 
                  SET Name = ?, Photo = ?, Position = ?, Rating = ?, CountryID = ?, ClubID = ? 
                  WHERE PlayerID = ?";
        $stmt = prepare_sql_query($conn, $query, [$name, $photo, $position, $rating, $countryID, $clubID, $playerID]);
        mysqli_stmt_execute($stmt);

        echo "Mise à jour réussie.";
    } catch (Exception $e) {
        echo "Erreur lors de la mise à jour : " . $e->getMessage();
    }
}
}
    








?>

