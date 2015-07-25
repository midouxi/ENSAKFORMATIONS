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
    <!--==============================menu=================================-->
    <?php 
      $administrateur="active";
      include("../Layouts/menuadmin.php");
    ?>
    <!-- top banner -->
      <div class="inscription">
        <div class="container">
          <div class="col-lg-12">

            <div class="col-lg-8">
              <h1 class="title">NOUVELLES FORMATIONS</h1>
            </div>

            <div class="col-lg-4">
              <img src="../images/formation.png">
            </div>

          </div>
        </div>
      </div>
      <div class="sub">
        <h2 class="title">Nouvelles Formations</h2>
      </div>

	<!-- page content -->
  <div class="form-area">
    <div class="container">
      <div class="col-lg-12">
        <form action="ajouter_formations.php" method="post" class="form-horizontal" enctype="multipart/form-data">
           <fieldset>
                <div class="form-group col-lg-12">
                  <label for="id_formations" class="col-lg-4 control-label">Id Formations *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="id_formations" id="id_formations" type="text" value="" tabindex="1" class="form-control" placeholder="Id Formations" maxlength="40" onkeyup="limitTextCount('id_formations', 'divform', 40);" onkeydown="limitTextCount('id_formations', 'divform', 40);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-asterisk"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divform">40 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="menu_titre" class="col-lg-4 control-label">Titre du Menu *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="menu_titre" id="menu_titre" type="text" value="" tabindex="2" class="form-control" placeholder="Titre du Menu" maxlength="1000" onkeyup="limitTextCount('menu_titre', 'divmenu', 1000);" onkeydown="limitTextCount('menu_titre', 'divmenu', 1000);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-text-size"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divmenu">1000 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="niveau" class="col-lg-4 control-label">Niveau *: </label>
                  <div class="col-lg-6">
                    <select class="form-control" name="niveau" id="niveau"  tabindex="7" required>
                      <option value="" selected>--Choisir--</option>
                      <option value="Licence">Licence</option>
                      <option value="Master">Master</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="logo" class="col-sm-4 control-label">Logos : </label>
                  <div class="col-sm-6">
                      <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                      <input type="hidden" name="MAX_FILE_SIZE" value="100048576"/>
                      <input type="file" name="logo" id="logo" tabindex="4" style="display:none">
                      <input type="text" id="imagelogo" class="form-control">
                      <span class="input-group-btn">
                        <botton class="btn btn-browse" onclick="$('input[id=logo]').click();">Browse</botton>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="titre" class="col-lg-4 control-label">Titre *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="titre" id="titre" type="text" value="" tabindex="5" class="form-control" placeholder="Titre" maxlength="1000" onkeyup="limitTextCount('titre', 'divtitre', 1000);" onkeydown="limitTextCount('titre', 'divtitre', 1000);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-text-size"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divtitre">1000 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="nbr_semestre" class="col-lg-4 control-label">Nombre de Semestre *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="nbr_semestre" id="nbr_semestre" type="text" value="" tabindex="6" class="form-control" placeholder="Nombre de Semestre" maxlength="50" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-list-alt"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="domaine" class="col-lg-4 control-label">Domaine *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="domaine" id="domaine" type="text" value="" tabindex="7" class="form-control" placeholder="Domaine" maxlength="1000" onkeyup="limitTextCount('domaine', 'divdomaine', 1000);" onkeydown="limitTextCount('domaine', 'divdomaine', 1000);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-briefcase"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divdomaine">1000 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="type_formations" class="col-lg-4 control-label">Type de formation *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="type_formations" id="type_formations" type="text" value="" tabindex="8" class="form-control" placeholder="Type de formation" maxlength="1000" onkeyup="limitTextCount('type_formations', 'divtype', 1000);" onkeydown="limitTextCount('type_formations', 'divtype', 1000);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-tag"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divtype">1000 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="duree" class="col-lg-4 control-label">Durée *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="duree" id="duree" type="text" value="" tabindex="9" class="form-control" placeholder="Durée" maxlength="200" onkeyup="limitTextCount('duree', 'divduree', 200);" onkeydown="limitTextCount('duree', 'divduree', 200);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-hourglass"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divduree">200 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="email" class="col-lg-4 control-label">Email *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="email" id="email" type="email" value="" tabindex="10" class="form-control" placeholder="Email" maxlength="500" onkeyup="limitTextCount('email', 'divemail', 500);" onkeydown="limitTextCount('email', 'divemail', 500);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divemail">500 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="phone" class="col-lg-4 control-label">Téléphone *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="telephone" id="phone" type="text" value="" tabindex="11" class="form-control" placeholder="Téléphone" maxlength="600" onkeyup="limitTextCount('phone', 'divtel', 600);" onkeydown="limitTextCount('phone', 'divtel', 600);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-earphone"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="divtel">600 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="fax" class="col-lg-4 control-label">Fax : </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="fax" id="fax" type="text" value="" tabindex="12" class="form-control" maxlength="400" placeholder="Fax">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-print"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="icone" class="col-sm-4 control-label">Débouchés de la formation : </label>
                  <div class="col-sm-6">
                      <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                      <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                      <input type="file" id="icone" name="icone"  style="display:none">
                      <input type="text" id="imageicone" tabindex="13" class="form-control">
                      <span class="input-group-btn">
                        <botton class="btn btn-browse" onclick="$('input[id=icone]').click();">Browse</botton>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="condition_admission" class="col-lg-4 control-label">Condition d'admission *: </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="condition_admission" id="condition_admission" tabindex="14" maxlength="1000" onkeyup="limitTextCount('condition_admission', 'divadmission', 1000);" onkeydown="limitTextCount('condition_admission', 'divadmission', 1000);" required></textarea>
                    <h6 style="color:red;"><span id="divadmission">1000 Caractères restants.</span></h6>
                  </div>
                </div>   

                <div class="form-group col-lg-12">
                  <label for="organisation_formations" class="col-lg-4 control-label">Organisation de la formation *: </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="organisation_formations" id="organisation_formations" tabindex="15" maxlength="1000" onkeyup="limitTextCount('organisation_formations', 'divorg', 1000);" onkeydown="limitTextCount('organisation_formations', 'divorg', 1000);" required></textarea>
                    <h6 style="color:red;"><span id="divorg">1000 Caractères restants.</span></h6>
                  </div> 
                </div>

                <div class="form-group col-lg-12">
                  <label for="date_depot" class="col-lg-4 control-label">Calendrier date de dépôt dossier *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="date_depot" id="date_depot" type="date" value="" tabindex="16" class="form-control" placeholder="Calendrier date de dépôt dossier" maxlength="1000" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>
                </div> 

                <div class="form-group col-lg-12">
                  <label for="date_entretien" class="col-lg-4 control-label">Calendrier date d'entretien *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="date_entretien" id="date_entretien" type="date" value="" tabindex="17" class="form-control" placeholder="Calendrier date d'entretien" maxlength="1000" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>
                </div>  	

                <div class="form-group col-lg-12">
                  <label for="frais_formations" class="col-lg-4 control-label">Frais de formations *: </label>
                  <div class="col-lg-6">
                    <textarea class="form-control" name="frais_formations" id="frais_formations" tabindex="15" maxlength="1000" onkeyup="limitTextCount('frais_formations', 'divfrais', 1000);" onkeydown="limitTextCount('frais_formations', 'divfrais', 1000);" required></textarea>
                    <h6 style="color:red;"><span id="divfrais">1000 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="frais_entretien" class="col-lg-4 control-label">Frais d'entretien *: </label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input name="frais_entretien" id="frais_entretien" type="text" value="" tabindex="19" class="form-control" placeholder="Frais D'entretien" maxlength="1000" onkeyup="limitTextCount('frais_entretien', 'diventretien', 1000);" onkeydown="limitTextCount('frais_entretien', 'diventretien', 1000);"required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-usd"></span>
                        </span>
                      </div>
                      <h6 style="color:red;"><span id="diventretien">1000 Caractères restants.</span></h6>
                  </div>
                </div> 

                <div class="form-group col-lg-12">
                  <label for="sponsor" class="col-sm-4 control-label">Partenaire Logo : </label>
                  <div class="col-sm-6">
                      <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
                      <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                      <input type="file" name="sponsor"id="sponsor" name="MAX_FILE_SIZE" value="1048576" style="display:none">
                      <input type="text" id="imagesponsor" tabindex="20" class="form-control">
                      <span class="input-group-btn">
                        <botton class="btn btn-browse" onclick="$('input[id=sponsor]').click();">Browse</botton>
                      </span>
                    </div>
                  </div>
                </div>	

            <div class="form-group col-lg-12">
              <div class="col-lg-6 col-lg-offset-4">
                <input type="submit"  class="btn btn-valide" id="send-message" value="Ajouter" tabindex="21">
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
<?php } else { ?> 
  <script>window.location.href="../Admin/index.php"; </script>
<?php } ?> 

    <script type="text/javascript">
      $('input[id=logo]').change(function() {
        $('#imagelogo').val($(this).val());
      });
      $('input[id=icone]').change(function() {
        $('#imageicone').val($(this).val());
      });
      $('input[id=sponsor]').change(function() {
        $('#imagesponsor').val($(this).val());
      });
    </script>
</body>
</html>