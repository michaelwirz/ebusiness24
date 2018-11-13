<!-- 
//"Die Waren werden über eine eindeutige Produktnummer identifiziert (Primärschlüssel). Neben der Produktnummer sollen der Name des Produkts, der Einkaufspreis und der Verkaufspreis erfasst werden."

//hier soll eine HTML-Tabelle erstellt werden, die die MySQL-Tabelle "Ware" vollständig abbildet:
//  1. Spalte: Produktnummer
//  2. Spalte: Name des Produktes
//  3. Spalte: Verkaufspreis
-->

<?php 
include 'head.php';
$page = "Warenbestand";
?>

<body class="">
  <div class="wrapper ">
        <?php include 'sidebar.php'; ?>
    </div>
    <div class="main-panel">
      <?php include 'navbar.php'; ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Warenbestände</h4>
                  <p class="card-category">Stand <?php
date_default_timezone_set('Europe/Berlin');
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
                      <?php include 'stock_query.php' ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div><?php include 'footer.php' ?></div>