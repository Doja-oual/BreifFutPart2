<?php
require_once '../config/db.php';
require_once '../includes/utils.php';
require_once '../includes/functions.php';

$error_message = '';
$success_message = '';


if (!isset($_GET['PlayerID']) || !is_numeric($_GET['PlayerID'])) {
    header('Location: Players.php');
    exit();
}

$id = intval($_GET['PlayerID']);
$player = get_student_by_id($PlayerID);

if (!$player) {
    header('Location: Player.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    
        if ($stmt) {
            mysqli_stmt_execute($stmt);
            
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                $success_message = "Étudiant modifié avec succès !";
                $player = get_student_by_id($PlayerID);
            } else {
                $error_message = "Aucune modification effectuée.";
            }
            
            mysqli_stmt_close($stmt);
        }
    } else {
        $error_message = "Données invalides. Veuillez vérifier vos informations.";
    }
    
    db_close($conn);
}
?>