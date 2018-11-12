<!-- 
//"Die Waren werden über eine eindeutige Produktnummer identifiziert (Primärschlüssel). Neben der Produktnummer sollen der Name des Produkts, der Einkaufspreis und der Verkaufspreis erfasst werden."

//hier soll eine HTML-Tabelle erstellt werden, die die MySQL-Tabelle "Ware" vollständig abbildet:
//  1. Spalte: Produktnummer
//  2. Spalte: Name des Produktes
//  3. Spalte: Verkaufspreis
-->

<?php include 'head.php';?>
<body class="">
  <div class="wrapper ">
        <?php include 'sidebar.php'; ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Warenbestand</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="mailto:mail@nicolaskatte.de">
                  <i class="material-icons">mail_outline</i> IT-Kontaktieren
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Warenbestände</h4>
                  <p class="card-category">Stand <?php
$datum = date("d.m.Y - H:i");
echo $datum;
?> Uhr</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Produktname
                        </th>
                        <th>
                          Einkaufspreis
                        </th>
                        <th>
                          Verkaufspreis
                        </th>
                      </thead>
                      <?php include 'query_stock.php' ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div><?php include 'footer.php' ?></div>