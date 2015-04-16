<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Administrateur";
  include("../Layouts/headstatic.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") { 
?>
<body>
  <!-- TOP BANNER -->
    <div class="col-lg-12">
        <div class="top-banner">
            <div class="col-lg-2">
                <img src="../images/logo-ensak.jpg">
            </div>
            <div class="col-lg-8">
                <h3>Universite Hassan 1<sup>er</sup></h3>
                <h4>Ecole Nationale des Sciences Appliquées de Khouribga</h4>
            </div>
            <div class="col-lg-2">
                <img src="../images/logo-uh1.png">
            </div>
        </div>
    </div>
    <!--==============================header=================================-->
    <?php $administrateur2="active";
    include("../Layouts/menuadmin.php");?>
    <!-- top banner -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">SUPPRESSION FORMATION</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/formation.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Suppression d'une Formations</h2>
      </div>

  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <form action="delete_formations.php" method="post" class="sky-form" enctype="multipart/form-data">
          <fieldset>
            <div class="form-group col-lg-12">
              <label for="formation" class="col-lg-4 control-label">Formation souhaitée :</label>
              <div class="col-lg-6">
                <select class="form-control" name="id_page" id="formation"  tabindex="9">
                  <option value="" selected>--Choisir--</option>
                  <?php 
                    include("../Model/functdb.php");
                    $functdb = new functdb();
                    $functdb->getformationline();
                  ?>
                </select>
              </div>
            </div> 
            <div class="form-group col-lg-12">
              <div class="col-lg-6 col-lg-offset-4">  
                <input type="submit"  class="btn btn-valide" value="Entrer" tabindex="2">
              </div>
            </div>
          </fieldset>
        </form>      
      </div>
    </div>
  </div>
<?php } else { ?> 
  <script>window.location.href="../Admin/adminlogin.php"; </script>
<?php } ?> 
</body>
</html>