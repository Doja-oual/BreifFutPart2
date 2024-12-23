<!-- <?php
 //require_once '../config/db.php';
 

//  if(!isset($_GET['playerID'])  || is_numeric($_GET['playerID'])){
//     header('location: ../dachbord/Players.php');
//     exit();
//  }
//     $id=intval($_GET['playerID']);

// $query="DELETE FROM Players WHERE playerID=?";
// $stmt=prepare_sql_query($conn,$query,[$id]);


// if($stmt){
//     mysqli_stmt_execute($stmt);

//     if(mysqli_stmt_affected_rows($stmt)>0){
//         $_SESSION['message'] = "Player supprimé avec succès !";

//     }else{
//         $_SESSION['error'] = "Étudiant non trouvé.";

//     } mysqli_stmt_close($stmt);

// }else {
//     $_SESSION['error'] = "Erreur lors de la suppression de player.";
// }

// db_close($conn);
// header('location : ../dachbord/Players.php')
 

// ?> 

 <?php
 require '../config/db.php';
 $id=$_GET['playerID'];

 $sql="DELETE FROM Players WHERE playerID='$id'";
 $query=mysqli_query($conn,$sql);
 if(isset($query)){
    echo"<h1>Supreme avec success</h1>";
 }else{
    echo"<h1>errur</h1>";
 }
