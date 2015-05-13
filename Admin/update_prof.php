<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Administrateur";
  include("../Layouts/headstatic.php");
  session_start();
  if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") { 
?>
<script src="../js/go.js"></script>
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
              <h1 class="title">MISE À JOUR DES PROFESSEURS</h1>
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
  $all_ins=$_db->query("select * from prof where id_prof='$idprof'");
  $all_ins->setFetchMode(PDO::FETCH_NUM);
  while($ligne=$all_ins->fetch()){ 
  ?> 
  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <form action="update_prof_result.php" method="post" class="form-horizontal" id="cform" name="cform" enctype="multipart/form-data">
          <fieldset>
                <div class="form-group col-lg-12">
                  <label for="nom" class="col-lg-4 control-label">Nom * : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="nom" id="nom" type="text" value="<?php echo $ligne[1]; ?>" tabindex="1" class="form-control">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-user"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="prenom" class="col-lg-4 control-label">Prénom * : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="prenom" id="prenom" type="text" value="<?php echo $ligne[2]; ?>" tabindex="2" class="form-control">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-user"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="resume" class="col-lg-4 control-label">Résumé * : </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="resume" id="resume" tabindex="14"><?php echo $ligne[3]; ?></textarea>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="descriptif" class="col-lg-4 control-label">Descriptif * : </label>
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
                  <div class="col-lg-4 control-label"></div>
                  <div class="form-group col-lg-6">  
                    <table class="table table-striped table-bordered" style="margin-left: 15px;">
                      <thead>
                          <tr>
                            <td>FORMATIONS</td>
                            <td>TRAITEMENT</td>
                          </tr>
                      </thead>
                      <tbody>
                       <?php
                          include "../Model/functdb.php";
                          $functdb = new functdb();
                          $functdb->getresponsable($idprof);
                        ?>   
                      </tbody>
                    </table>
                  </div>
                </div>
                <input type="hidden" name="id_prof" value=<?php echo $_POST['id_prof']; ?> >
              <div class="form-group col-lg-12">
                <div class="col-lg-6 col-lg-offset-4">
                  <input type="submit"  class="btn btn-valide" id="send-message" value="Modifier" tabindex="10">
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
<?php } else { ?> <script>window.location.href="../fr/index.php"; </script><?php } ?>
</body>
</html>