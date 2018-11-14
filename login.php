<!doctype html>
<html lang="en">
<?php
    require('../vendor/autoload.php');
?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KEA Warenhaltung
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="main-panel-no-sidebar">
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header card-header-info">
                                    <h4 class="card-title">Anmelden</h4>
                                    <p class="card-category">Zugang nur für Mitarbeiter von KEA!</p>
                                </div>
                                <div class="card-body">
                                    <form class="text-center border border-light p-5">
                                        <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

                                        <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

                                        <input type="submit" name="anmelden"  class="btn btn-info btn-block my-4" value="Anmelden">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        <footer class="footer">
                <div class="container-fluid">
                  <nav class="float-left">
                    <ul>
                      <li>
                        <a href="">
                          SAB Warenwirtschaftssystem
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <div class="copyright float-right">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="" target="_blank">eBusiness24, Uni Mainz</a>
                  </div>
                </div>
        </footer>
        </div></div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
</body>

</html>