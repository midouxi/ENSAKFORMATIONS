﻿<?php
$title="ENSA Khouribga - Inscription";
include("../Layouts/headstatic.php");
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
    include_once "../Classes/inscription.class.php";
    include_once "../Controller/inscriptionmanager.php";

    if(!(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['date_naissance']) OR empty($_POST['cin']) OR empty($_POST['tel']) OR empty($_POST['email']) OR empty($_POST['diplome']) OR empty($_POST['etablissment']) OR empty($_POST['formation']) OR empty($_POST['lettre_motivation']) OR empty($_POST['etat'])))
    {
      $inscriptionmanager = new inscriptionmanager();
      $inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['cin'], $_POST['tel'], $_POST['email'], $_POST['diplome'], $_POST['etablissment'], $_POST['formation'], $_POST['lettre_motivation'], $_POST['etat']);
      $inscriptionmanager->add($inscription);
      echo "<div class='sky'><h3>Féliciation Inscription réussite</h3><p>Vous recevrez un mail dans les prochaines jours quand votre inscription sera valider</p><p>Attention verifier aussi votre corrier indesrable!!</p>";
      echo '<a href="index.php">Revenire à la page d\'accueil</a></div>';
    }else{ echo '
							
        <form action="" method="post" class="form-horizontal" id="cform" name="cform">
            <fieldset>
            	  <div class="form-group col-lg-12">
                  <label for="name" class="col-lg-4 control-label">Nom *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="nom" id="name" type="text" value="" tabindex="1" placeholder="Nom">
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
                        <input class="form-control" name="prenom" id="prenom" type="text" value="" tabindex="2" placeholder="Prénom">
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
                        <input class="form-control" name="date_naissance" id="date" type="date" value="" tabindex="3" placeholder="Date de naissance">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="cin" class="col-lg-4 control-label">Numero de la carte Nationale(CIN) *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="cin" id="cin" type="text" value="" tabindex="4" placeholder="CIN">
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
                        <input class="form-control" name="tel" id="phone" type="number" value="" tabindex="5" placeholder="Téléphone">
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
                        <input class="form-control" name="email" id="email" type="email" value="" tabindex="6" placeholder="Email">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>
                
                <div class="form-group col-lg-12">
                  <label for="diplome" class="col-lg-4 control-label">Dernier diplome obtenu *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="diplome" id="diplome"  tabindex="7">
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
                        <input class="form-control" name="etablissment" id="ecole" type="text" value="" tabindex="8"placeholder="Etablissement">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-home"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="formation" class="col-lg-4 control-label">Formation souhaitée *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="formation" id="formation"  tabindex="9">
                      <option value="" selected>--Choisir--</option>
                      <option value="License Ingenierie du logiciel">License Ingénierie du logiciel</option>
                      <option value="License Administration reseaux">License Administration réseaux</option>
                      <option value="License systemes information">License systemes d\'information</option>
                      <option value="Master informatique">Master informatique</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="message" class="col-lg-4 control-label">Lettre de motivation *</label>
                  <div class="col-lg-6">
                    <textarea class="form-control" rows="3" name="lettre_motivation" id="message" tabindex="10"></textarea>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <div class="col-lg-6 col-lg-offset-4">
                    <input type="submit"  class="btn btn-valide" id="send-message" value="s\'inscrire" tabindex="10">		<input type="hidden" name="etat" value="non Traiter">
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