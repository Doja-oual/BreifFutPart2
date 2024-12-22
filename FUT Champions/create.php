<?php
require_once '../config/utils.php'; 
require '../config/actions.php';
$clubs=get_all_clubs($conn);
$Nationalities= get_all_county($conn);
$error_message = '';
$success_message = '';

    // Récupération des données du formulaire
   


    
    // Validation basique
    // if ($name && $position && $rating && $countryID && $clubID) {
    //     // Photo handling (you might want to add proper file upload handling here)
    //     $photo = "/path/to/default/photo.jpg"; // Default photo path
        
    //     // Requête SQL pour insérer un joueur dans la table Players
    //     $query = "INSERT INTO Players (PlayerID ,Name, Photo, Position, Rating, CountryID, ClubID) 
    //               VALUES (  ,?, ?, ?, ?, ?, ?)";
        
    //     try {
    //         // Préparation de la requête
    //         $stmt = prepare_sql_query($conn, $query, [
    //             $name, $photo, $position, $rating, $countryID, $clubID
    //         ]);
            
    //         if ($stmt) {
    //             // Exécution de la requête pour insérer le joueur
    //             if (mysqli_stmt_execute($stmt)) {
    //                 // Récupérer l'ID du joueur inséré
    //                 $playerID = mysqli_insert_id($conn);
                    
    //                 // Insérer les statistiques dans la table PlayerStats
    //                 $queryStats = "INSERT INTO PlayerStats (PlayerID, Pace, Shooting, Passing, Dribbling, Defending, Physical) 
    //                              VALUES (?, ?, ?, ?, ?, ?, ?)";
    //                 $stmtStats = prepare_sql_query($conn, $queryStats, [
    //                     $playerID, $pace, $shooting, $passing, $dribbling, $defending, $physical
    //                 ]);
                    
    //                 if ($stmtStats && mysqli_stmt_execute($stmtStats)) {
    //                     $success_message = "Joueur ajouté avec succès !";
    //                 } else {
    //                     $error_message = "Erreur lors de l'ajout des statistiques du joueur.";
    //                 }
                    
    //                 mysqli_stmt_close($stmtStats);
    //             } else {
    //                 $error_message = "Erreur lors de l'ajout du joueur.";
    //             }
                
    //             mysqli_stmt_close($stmt);
    //         }
    //     } catch (Exception $e) {
    //         $error_message = "Une erreur est survenue: " . $e->getMessage();
    //     }
    // } else {
    //     $error_message = "Tous les champs obligatoires doivent être remplis.";
    // }
// }

// Le reste du HTML reste le même...
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
    Argon Dashboard 3 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/style.css"rel="stylesheet" />

</head>

<body class="g-sidenav-show   bg-gray-100">
 <h1>Ajouter un Étudiant</h1>
        <a href="../dachbord/Players.php">Retour à la liste</a>
        
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/LOGO.jpg" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">FUT Champions</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="../pages/dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../dachbord/Players.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">player</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/dachbord/county.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">nationnalite</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/dachbord/club.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Club</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../../FUT Champions/pages/dachbord/archif.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Archife</span>
          </a>
        </li>
      </ul>
    </div>
  
  </aside>
  
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
   
        <?php if ($error_message): ?>
            <div class="error-message"><?= $error_message ?></div>
        <?php endif; ?>
        
        <?php if ($success_message): ?>
            <div class="success-message"><?= $success_message ?></div>
        <?php endif; ?>
      <!--Form des joueurs validation dynamique------------------------->
      <section class="form-content"  >
        <form id="form-content" method="POST"  action="../config/traitement.php">
          <input type="hidden" name="action" value="create">
          <div class="btn-switche">
            <button type="button" id="btn-player">players</button>
            <button
              type="button"
              id="btn-gardien"
              class="disabled"
              id="btn-gardien"
            >
              goalkeeper
            </button>
          </div>
          <div class="input-groups">
            <div class="input-groups-flex1">
        
             
              <div class="input-groub-box">
              <!--name-->
              <div class="input-box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
              </div>
            

              <!--select-club-->
              <div class="input-box">
                <label for="football-club">Football Club</label>
                <select name="football-club" id="football-club">
                  <?php foreach($clubs as $club){ ?>
                    <option value="<?= $club['ClubID'] ?>">
                      <?= $club['ClubName'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
            </div>
          

              <!-- les inpute de player rat/pac,sho,pass,drib,def,phy-->
               <div id="player-input">
              <div class="input-groub-box">
                <div class="input-box">
                  <label for="rating">rating</label>
                  <input type="number" name="rating" id="rating" />
                </div>
                <div class="input-box">
                <label for="profilePhoto">photo :</label>
                <input type="file" id="profilePhoto" name="profilePhoto" accept="image/*" required/>
                  </div>
                  
                <div class="input-box">
                  <label for="pace">pace</label>
                  <input type="number" name="pace" id="pace" />
                </div>
              </div>
              <div class="input-groub-box">
                <div class="input-box">
                  <label for="shooting">shooting</label>
                  <input type="number" name="shooting" id="shooting" />
                </div>
                <div class="input-box">
                  <label for="passing">passing</label>
                  <input type="number" name="passing" id="passing" />
                </div>
              </div>
              <div class="input-groub-box">
                <div class="input-box">
                  <label for="dribbling">dribbling</label>
                  <input
                    type="number"
                    name="dribbling"
                    id="dribbling"
                    placeholder="dribbling"
                  />
                </div>
                <div class="input-box">
                  <label for="defending">defending</label>
                  <input
                    type="number"
                    name="defending"
                    id="defending"
                    placeholder="defending"
                  />
                </div>
                <div class="input-box">
                  <label for="physical">physical</label>
                  <input
                    type="number"
                    name="physical"
                    id="physical"
                    placeholder="defending"
                  />
                </div>
              </div>
            </div>
              <!--les inpute de gardiens  -->

              <div id="goalkeeper-input" style="display: none;">
                <div class="input-groub-box">
                <div class="input-box">
                  <label for="handling">Handling</label>
                  <input type="number" name="handling" id="handling" />
                </div>
                <div class="input-box">
                  <label for="speed">speed</label>
                  <input type="number" name="speed" id="speed" />
                </div>
                <div class="input-box">
                  <label for="reflexes">Reflexes</label>
                  <input class="hg" type="number" name="reflexes" id="reflexes" />
                </div>
                </div>
                <div class="input-groub-box">
                <div class="input-box">
                  <label for="diving">Diving</label>
                  <input type="number" name="diving" id="diving" />
                </div>
                <div class="input-box">
                  <label for="positioning">positioning</label>
                  <input type="number" name="positioning" id="positioning" />
                </div>
                <div class="input-box">
                  <label for="kicking">kicking</label>
                  <input type="number" name="kicking" id="kicking" />
                </div>
              </div>
              </div>
              <div class="input-groub-box">
              

                <!--select-position-->
                <div class="input-box">
                  <label for="position">position</label>
                  <select name="position" id="position">
                    <!-- <option value="GK">GK</option> -->
                    <option value="chang">chang</option>
                    <option value="CB1">CB1</option>
                    <option value="CB2">CB2</option>
                    <option value="CB3">CB3</option>
                    <option value="CM1">CM1</option>
                    <option value="CM1">CM1</option>
  
                    <option value="LM">LM</option>
                    <option value="CAM">CAM</option>
                    <option value="RM">RM</option>
                    <option value="ST1">ST1</option>
                    <option value="ST2">ST2</option>
                  
  
  
                  </select>
                </div>
                <!--select-nationality-->
                <div class="input-box">
                  <label for="nationality">Nationality</label>
                  <select name="nationality" id="nationality">
                  <?php foreach($Nationalities as $Nationalitie){ ?>
                    <option value="<?= $Nationalitie['CountryID'] ?>">
                      <?= $Nationalitie['CountryName'] ?>
                    </option>
                  <?php } ?>                    
                  </select>
                </div>
            
              <div class="input-box">
                <label for="flag">flag</label>
                <!--select-->
                <select id="mySelect">
                  <option
                    value="1"
                    data-image="https://cdn.sofifa.net/flags/ar.png"
                  >
                    Ar
                  </option>
                  <option
                    value="2"
                    data-image="https://cdn.sofifa.net/flags/pt.png"
                  >
                    Pt
                  </option>
                  <option
                    value="3"
                    data-image="https://cdn.sofifa.net/flags/be.png"
                  >
                    Be
                  </option>
                  <option
                    value="4"
                    data-image="https://cdn.sofifa.net/flags/fr.png"
                  >
                    Fr
                  </option>
                  <option
                    value="5"
                    data-image="https://cdn.sofifa.net/flags/nl.png"
                  >
                    Nl
                  </option>
                  <option
                    value="6"
                    data-image="https://cdn.sofifa.net/flags/de.png"
                  >
                    Be
                  </option>
                  <option
                    value="7"
                    data-image="https://cdn.sofifa.net/flags/eg.png"
                  >
                    Eg
                  </option>
                  <option
                    value="8"
                    data-image="https://cdn.sofifa.net/flags/de.png"
                  >
                    De
                  </option>
                  <option
                    value="9"
                    data-image="https://cdn.sofifa.net/flags/si.png"
                  >
                    Si
                  </option>
                  <option
                    value="10"
                    data-image="https://cdn.sofifa.net/flags/hr.png"
                  >
                    Hr
                  </option>
                  <option
                    value="11"
                    data-image="https://cdn.sofifa.net/flags/be.png"
                  ></option>
                </select>
              </div>
            </div>
            
              <!-- <input type="submit" value="add player" class="btn" /> -->
              <button class="btn" id="add__player" name="addPlayer" > Add player</button>
              <button class="btn" id="update__player" name="UpdatePlayer" >update player</button>
              
              <!-- <input type="submit" value=" update player"  style="display: none;" /> -->
          
            
          </div>
        </form>
      </section>
     
  </div>
   
  <!--   Core JS Files   -->
  <!-- <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script> -->
  <!-- Github buttons -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script> -->
  <script src="../assets/js/main.js"></script>
</body>

</html>