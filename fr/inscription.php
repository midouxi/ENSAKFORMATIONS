<?php
$title="ENSA Khouribga - Inscription";
include("../Layouts/headstatic.php");
?>
<script src="../js/countercarac.js"></script>
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
    <!--============================== menu =================================-->
			<?php $id = 'inscription'; include("menu.php");  ?>
    <!--============================== fin menu =================================-->
     <!-- inscreption pannel -->
    <div class="inscription">
      <div class="container">
        <div class="col-lg-12">

          <div class="col-lg-8">
            <h1 class="title">INSCRIPTION</h1>
            <p>Inscrivez vous dès maintenant, le nombre de places est limité !!</p>
          </div>

          <div class="col-lg-4">
            <img src="../images/inscription.png">
          </div>

        </div>
      </div>
    </div>

    <div class="sub">
      <h2 class="title">Formulaire d'inscription</h2>
      <p>Veuillez renseigner tous les champs obligatoires(*)</p>
    </div>

  <!-- page content -->
    <div class="form-area">
      <div class="container">
        <div class="col-lg-12">

  <?php
    include_once "../Controller/inscriptionmanager.php";
    include_once "../Classes/inscription.class.php";
    if(!empty($_POST['nom']) || !empty($_POST['prenom']) || !empty($_POST['date_naissance']) || !empty($_POST['cin']) || !empty($_POST['tel']) || !empty($_POST['email']) || !empty($_POST['diplome']) || !empty($_POST['etablissment']) || !empty($_POST['formation']) || !empty($_POST['lettre_motivation']) || !empty($_POST['etat']) || !empty($_POST['etat']))
    {
      $inscriptionmanager = new inscriptionmanager();
      $inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['cin'], $_POST['tel'], $_POST['email'], $_POST['diplome'], $_POST['etablissment'], $_POST['formation'], $_POST['lettre_motivation'], $_POST['etat'], $_POST['created']);
      $inscriptionmanager->add($inscription);
      echo "<div class='sky'><h3>Félicitation Inscription réussite</h3><p>Vous recevrez un mail dans les prochaines jours quand votre inscription sera validée .</p><p>Attention ! Vérifiez aussi votre courrier indésirable .</p>";
      echo '<a href="index.php">Revenir à la page d\'accueil</a></div>';
    }else{ echo '
							
        <form action="" method="post" class="form-horizontal" id="cform" name="cform">
            <fieldset>
            	  <div class="form-group col-lg-12">
                  <label for="name" class="col-lg-4 control-label">Nom *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="nom" id="name" type="text" value="" tabindex="1" placeholder="Nom" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-user"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="prenom" class="col-lg-4 control-label">Prénom *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="prenom" id="prenom" type="text" value="" tabindex="2" placeholder="Prénom" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-user"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="date" class="col-lg-4 control-label">Date de naissance *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="date_naissance" id="date" type="date" value="" tabindex="3" placeholder="Date de naissance" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="cin" class="col-lg-4 control-label">Numéro de la carte Nationale(CIN) *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="cin" id="cin" type="text" value="" tabindex="4" placeholder="CIN" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-credit-card"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="phone" class="col-lg-4 control-label">Téléphone *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="tel" id="phone" type="number" value="" tabindex="5" placeholder="Téléphone" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-earphone"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="email" class="col-lg-4 control-label">Email *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="email" id="email" type="email" value="" tabindex="6" placeholder="Email" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>
                
                <div class="form-group col-lg-12">
                  <label for="diplome" class="col-lg-4 control-label">Dernier diplome obtenu *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="diplome" id="diplome"  tabindex="7" required>
                      <option value="" selected>--Choisir--</option>
                      <option value="bac+2">BAC +2</option>
                      <option value="bac+3">BAC +3</option>
                      <option value="bac+4">BAC +4</option>
                      <option value="autre">Autre</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="etablissment" class="col-lg-4 control-label">Etablissement *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="etablissment" id="ecole" type="text" value="" tabindex="8" placeholder="Etablissement" maxlength="100" onkeyup="limitTextCount(\'ecole\', \'divcount\', 100);" onkeydown="limitTextCount(\'ecole\', \'divcount\', 100);" required>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-home"></span>
                        </span>
                    </div>
                    <h6 style="color:red;"><span id="divcount">100 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="formation" class="col-lg-4 control-label">Formation souhaitée *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="formation" id="formation"  tabindex="9" required>
                      <option value="" selected>--Choisir--</option>
                      ';
                        include("../Model/functdb.php");
                        $functdb = new functdb();
                        $functdb->getformationline();
                      echo '
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="message" class="col-lg-4 control-label">Lettre de motivation *</label>
                  <div class="col-lg-6">
                    <textarea class="form-control" rows="3" name="lettre_motivation" id="message" tabindex="10" maxlength="2000" onkeyup="limitTextCount(\'message\', \'divmotiv\', 2000);" onkeydown="limitTextCount(\'message\', \'divmotiv\', 2000);" required></textarea>
                    <h6 style="color:red;"><span id="divmotiv">2000 Caractères restants.</span></h6>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <div class="col-lg-6 col-lg-offset-4">
                    <input type="submit"  class="btn btn-valide" id="send-message" value="s\'inscrire" tabindex="10">		
                    <input type="hidden" name="etat" value="0">
                    <input type="hidden" name="created" value="'; echo date('Y/m/d G:i:s ', time()); echo'">
                  </div>
                </div>
              </fieldset>
            </form>';
          }
  ?>    
        </div>
      </div>
    </div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>