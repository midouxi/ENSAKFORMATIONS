<?php 
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
      <?php 
      $role="active";
      include("../Layouts/menuadmin.php");
      ?>
      <!-- banner top -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">MODIFICATION COMPTE</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/admin.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Modification du compte</h2>
        <p>Veuillez renseigner tous les champs obligatoires (*)</p>
      </div>

<!-- page content -->
  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <form action="update_account_result.php" method="post" class="form-horizontal" id="cform" name="cform">
          <fieldset>
            <?php 
            include "../Model/functdb.php";
            $functdb = new functdb();
            ?>      
                <div class="form-group col-lg-12">
                  <label for="email" class="col-lg-4 control-label">Email * : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="email" id="email" type="email" value=<?php echo $functdb->getinfoaccount($_POST['id_c'],"email"); ?> tabindex="1" class="form-control" placeholder="Email">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>  

                <div class="form-group col-lg-12">
                  <label for="mdp" class="col-lg-4 control-label">Mot de passe * : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="mdp" id="mdp" type="text" value=<?php echo $functdb->getinfoaccount($_POST['id_c'],"mdp"); ?> tabindex="2" class="form-control" placeholder="Mot de passe">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>
 
              <div class="form-group col-lg-12">
                  <label for="filiere" class="col-lg-4 control-label">Filière * :</label> 
                  <div class="col-lg-6">
                    <select class="form-control" name="filiere" id="filiere"  tabindex="7">
                      <option value="" selected>--Choisir--</option>
                      <?php $functdb->getformationline();?>
                    </select>
                  </div>
                </div> 

                <div class="form-group col-lg-12">
                  <label for="type" class="col-lg-4 control-label">Type * :</label> 
                  <div class="col-lg-6">
                    <select class="form-control" name="type" id="type"  tabindex="8">
                    <?php if($functdb->getinfoaccount($_POST['id_c'],"type")=="admin") { 
                            $select1="selected";}
                          else if($functdb->getinfoaccount($_POST['id_c'],"type")=="editeur") { 
                            $select2="selected";}
                    ?>
                    <option value="" <?php echo $select0; ?>>--Choisir--</option>
                    <option value="admin" <?php echo $select1; ?>>Administrateur</option>
                    <option value="editeur" <?php echo $select2; ?>>Editeur</option>
                    </select>
                  </div>
                </div>     

              <input type="hidden" name="id_c" value=<?php echo $_POST['id_c']; ?> >
              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="submit" class="btn btn-valide" id="send-message" value="Mettre à jour" tabindex="10">
                </div>
              </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>