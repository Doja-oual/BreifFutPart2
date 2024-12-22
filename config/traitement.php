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

    $query = "INSERT INTO Players (Name, Photo, Position, Rating, CountryID, ClubID) 
     VALUES ( ?, ?, ?, ?, ?, ?)";
    $stmt=prepare_sql_query($conn,$query,[ $name,$photo,$position, $rating,$countryID,$clubID]);
    mysqli_stmt_execute($stmt);
    echo 'added success';


}

catch (Exception $e) {
             echo "Une erreur est survenue: " . $e->getMessage();
        }

    }
// if($_POST["action"]=="update"){

// }



}

?>