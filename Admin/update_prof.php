<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Administrateur";
  include("../Layouts/headstatic.php");
  session_start();
  //if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") { 
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
      $prof="active";
      include("../Layouts/menuadmin.php");
      ?>
      <!-- banner top -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">MISE À JOUR DES PROFESSEURs</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/admin.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Mise à jour des profs</h2>
        <p>Veuillez renseigner tous les champs obligatoires (*)</p>
      </div>
<!-- page content -->
  <?php 
  $idprof= $_POST['id_prof'];
  $all_ins=mysql_query("select * from prof where id_prof='$idprof'");
  while($ligne=mysql_fetch_array($all_ins)){
  ?> 
  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <form action="add_prof_result.php" method="post" class="form-horizontal" id="cform" name="cform" enctype="multipart/form-data">
          <fieldset>		
                <div class="form-group col-lg-12">
                  <label for="email" class="col-lg-4 control-label">Nom * : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="nom" id="nom" type="text" value="<?php echo $ligne[1]; ?>" tabindex="1" class="form-control">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="mdp" class="col-lg-4 control-label">Prénom * : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="prenom" id="prenom" type="text" value="<?php echo $ligne[2]; ?>" tabindex="2" class="form-control">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="condition_admission" class="col-lg-4 control-label">Résumé * : </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="resume" id="resume" tabindex="14"><?php echo $ligne[3]; ?></textarea>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="condition_admission" class="col-lg-4 control-label">Descriptif * : </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="descriptif" id="descriptif" tabindex="14"><?php echo $ligne[4]; ?></textarea>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="photo" class="col-sm-4 control-label">Photo *: </label>
                  <div class="col-sm-6">
                      <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                      <input type="hidden" name="MAX_FILE_SIZE" value="100048576"/>
                      <input type="file" name="photo" id="photo" tabindex="4" style="display:none">
                      <input type="text" id="imagephoto" class="form-control">
                      <span class="input-group-btn">
                        <botton class="btn btn-browse" onclick="$('input[id=photo]').click();">Browse</botton>
                      </span>
                    </div>
                  </div>
                  <div class="col-sm-2"><img src="<?php echo $ligne[5]; ?>" style="height:auto; width:100%;"></div>
                </div>

              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="submit"  class="btn btn-valide" id="send-message" value="Ajouter" tabindex="10">
                </div>
              </div>	
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <?php } ?>
<script type="text/javascript">
  $('input[id=photo]').change(function() {
    $('#imagephoto').val($(this).val());
  });
</script>
</body>
</html>