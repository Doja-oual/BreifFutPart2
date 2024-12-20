<?php
require '../config/actions.php';
$players=get_all_players($conn);
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
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/style.css"rel="stylesheet" />

</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
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
          <a class="nav-link active" href="../pages/dashboard.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/dachbord/Payers.html">
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
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Player</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">player</h6>
          <div class="sidenav-footer mx-3 ">
     
      <a class="btn btn-primary btn-sm mb-0 w-100" href="" type="button">ADD PLAYER</a>
    </div>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
           
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>PLAYERS</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Name</th>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Photo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Position</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Rating </th>

                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if (!empty($players)): ?>
                <?php foreach ($players as $player): ?>
                    <tr>
                        <td><?= ($player['PlayerID']) ?></td>
                        <td><?= htmlspecialchars($player['Name']) ?></td>
                        <td>
                            <img src="<?= htmlspecialchars($player['Photo']) ?>" alt="Photo de <?= htmlspecialchars($player['Name']) ?>">
                        </td>
                        <td><?= htmlspecialchars($player['Position']) ?></td>
                        <td><?= htmlspecialchars($player['Rating']) ?></td>
                        <td class='text-left py-3 px-4 flex justify-center gap-3'>
                        <span>
                            <a href="../FUT Champions/updet.php?PlayerID=<?= $player['PlayerID'] ?>" class="btn-edit"><i
                            class='fa-solid fa-pen-to-square cursor-pointer text-green-600'></i></a>
                        </span>
                        <span>
                            <a href="delete.php?PlayerID=<?= $player['PlayerID'] ?>" class="btn-delete" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')"><i
                            class='fa-solid fa-trash-can cursor-pointer text-red-600'></i></a>
                        </span>
                    </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" style="text-align: center;">Aucun joueur trouvé</td>
                </tr>
            <?php endif; ?>
        </tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
    
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
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
      <!--section-1/change des joueurs -->
   

      <!--Form des joueurs validation dynamique------------------------->
      <section class="form-content"  >
        <form id="form-content">
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
        
              <div class="input-box">
                <label for="Squad info ">Squad info </label>
                <select name="SquadInfo" id="SquadInfo">
                    <option value="3412">3-4-1-2</option>
                    <option value="442">4-4-2</option>
                    <option value="3421">3-4-2-1</option>
                    <option value="433">4-3-3</option>
                </select>
              </div>
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
                  <option value="" disabled selected>football club</option>
                  <option value="1">FC Barcelona</option>
                  <option value="2">Real Madrid</option>
                  <option value="3">Manchester United</option>
                  <option value="4">Liverpool FC</option>
                  <option value="5">Bayern Munich</option>
                  <option value="6">Paris Saint-Germain</option>
                  <option value="7">Juventus</option>
                  <option value="8">AC Milan</option>
                  <option value="9">Chelsea FC</option>
                  <option value="10">Arsenal FC</option>
                  <option value="11">Manchester City</option>
                  <option value="12">Tottenham Hotspur</option>
                  <option value="13">Borussia Dortmund</option>
                  <option value="14">Atlético Madrid</option>
                  <option value="15">Inter Milan</option>
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
                    <option value="" disabled selected>nationality</option>
                    <option value="1">American</option>
                    <option value="2">Canadian</option>
                    <option value="3">British</option>
                    <option value="4">French</option>
                    <option value="5">German</option>
                    <option value="6">Indian</option>
                    <option value="7">Australian</option>
                    <option value="8">Mexican</option>
                    <option value="9">Brazilian</option>
                    <option value="10">Spanish</option>
                    <option value="11">Italian</option>
                    <option value="12">Chinese</option>
                    <option value="13">Japanese</option>
                    <option value="14">Russian</option>
                    <option value="15">South African</option>
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
              <button class="btn" id="add__player">Add player</button>
              <button class="btn" id="update__player">update player</button>
              
              <!-- <input type="submit" value=" update player"  style="display: none;" /> -->
          
            
          </div>
        </form>
      </section>
     
    </div>
    <div id="content-chengment">
    </div>
   
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
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
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  <script src="./js/main.js"></script>
</body>

</html>