<?php 
include 'head.php';
$page = "foo";
?>

<body class="">
  <div class="wrapper ">
      <div class="main-panel">
          
          <div class="content">
        <div class="container-fluid">
         
      <div class="col-md-6">
    <div class="card">
        <div class="card-header card-header-success">
            <h4 class="card-title">Anmelden</h4>
            <p class="card-category">Zugang nur für Mitarbeiter von KEA!</p>
        </div>
        <div class="card-body">
      
        <form class="text-center border border-light p-5">
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">


            <input type="submit" name="anmelden"  class="btn btn-info btn-block my-4" value="Anmelden">

            
        </form>
    </div>
</div>
<div>
    <?php include 'footer.php' ?>
</div>