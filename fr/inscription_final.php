<?php
$title="ENSA Khouribga - Inscription Finale";
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
      <h2 class="title">Formulaire d'inscription final</h2>
      <p>Veuillez renseigner tous les champs obligatoires(*)</p>
    </div>


    <!-- page content -->
    <div class="form-area">
      <div class="container">
        <div class="col-lg-12">

	 <?php
      include_once "../Classes/inscription_final.class.php";
      include_once "../Controller/inscription_finalmanager.php";
      if(!(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['cne']) OR empty($_POST['cin']) OR empty($_POST['date_naissance']) OR empty($_POST['lieu_naissance']) OR empty($_POST['province']) OR empty($_POST['sexe']) OR empty($_POST['nationalite']) OR empty($_POST['situation']) OR empty($_POST['handicap']) OR empty($_POST['bac_annee']) OR empty($_POST['bac_serie']) OR empty($_POST['mention']) OR empty($_POST['etablissment']) OR empty($_POST['adresse']) OR empty($_POST['email']) OR empty($_POST['tel']) OR empty($_POST['tel_parents']) OR empty($_POST['prof_ben']) OR empty($_POST['prof_pere']) OR empty($_POST['prof_mere'])))
       {
      $inscription_finalmanager = new inscription_finalmanager();
      $inscription_final = new inscription_final($_POST['nom'], $_POST['prenom'], $_POST['cne'], $_POST['cin'], $_POST['date_naissance'], $_POST['lieu_naissance'], $_POST['province'], $_POST['sexe'], $_POST['nationalite'], $_POST['situation'], $_POST['handicap'], $_POST['bac_annee'], $_POST['bac_serie'], $_POST['mention'], $_POST['etablissment'], $_POST['adresse'], $_POST['email'], $_POST['tel'], $_POST['tel_parents'], $_POST['prof_ben'], $_POST['prof_pere'], $_POST['prof_mere']);
      $inscription_finalmanager->add($inscription_final);
      echo "<div class='sky'>Féliciation: inscription final réussite<br>";
      echo '<a href="index.php">Revenir à la page d\'accueil</a></div>';
       }else{                  
      echo'<form action="" method="post" class="form-horizontal" id="cform" name="cform">
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
                  <label for="cne" class="col-lg-4 control-label">Numero Nationale d\'etudiant(CNE) *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="cne" id="cne" type="number" value="" tabindex="3" placeholder="CNE">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-credit-card"></span>
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
                  <label for="date" class="col-lg-4 control-label">Date de naissance *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="date_naissance" id="date" type="date" value="" tabindex="5" placeholder="Date de naissance">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="lieu" class="col-lg-4 control-label">Lieu de naissance *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="lieu_naissance" id="lieu" type="text" value="" tabindex="6" placeholder="Lieu de naissance">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-map-marker"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="province" class="col-lg-4 control-label">Province *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="province" id="province" type="text" value="" tabindex="7" placeholder="Province">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-bookmark"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="sexe" class="col-lg-4 control-label">Sexe *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="sexe" id="sexe"  tabindex="8">
                      <option value="" selected>--Choisir--</option>
                      <option value="masculin">Masculin</option>
                      <option value="feminin">Féminin</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="nationalite" class="col-lg-4 control-label">Nationalité *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="nationalite" id="nationalite" type="text" value="" tabindex="9" placeholder="Nationalité">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-flag"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="situation" class="col-lg-4 control-label">Situation familiale *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="situation" id="situation"  tabindex="10">
                      <option value="" selected>Quel est votre statut?</option>
                      <option value="marie">Marié</option>
                      <option value="celibataire">Célibataire</option>
                      <option value="divorse">Divorsé</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="handicap" class="col-lg-4 control-label">Handicap *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="handicap" id="handicap"  tabindex="11">
                      <option value="" selected>--Choisir--</option>
                      <option value="oui">OUI</option>
                      <option value="non">NON</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="bac_annee" class="col-lg-4 control-label">Année d\'obtention du bac *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="bac_annee" id="bac_annee" type="number" value="" tabindex="12" placeholder="Année d\'obtention du bac">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-list-alt"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="bac_serie" class="col-lg-4 control-label">Série du bac *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="bac_serie" id="bac_serie" type="text" value="" tabindex="13" placeholder="Série du bac">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-list-alt"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="mention" class="col-lg-4 control-label">Mention *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="mention" id="mention"  tabindex="14">
                      <option value="" selected>--Choisir--</option>
                      <option value="Exelent">Excellent</option>
                      <option value="Tres bien">Trés Bien</option>
                      <option value="Bien">Bien</option>
                      <option value="Assez Bien">Assez Bien</option>
                      <option value="Pas de mention">sans</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="etablissment" class="col-lg-4 control-label">Etablissment *</label>
                  <div class="col-lg-6">
                    <select class="form-control" name="etablissment" id="etablissment" tabindex="15">
                      <option value="" selected>--Choisir--</option>
                      <option value="public">Public</option>
                      <option value="prive">Privé</option>
                    </select>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="adresse" class="col-lg-4 control-label">Adresse *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="adresse" id="adresse" type="text" value="" tabindex="16" placeholder="Adresse">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="email" class="col-lg-4 control-label">Email *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="email" id="email" type="email" value="" tabindex="17" placeholder="Email">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="phone" class="col-lg-4 control-label">Tél *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="tel" id="phone" type="number" value="" tabindex="18" placeholder="Tél">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-earphone"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="phone_parents" class="col-lg-4 control-label">Tél Parents *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="tel_parents" id="phone_parents" type="number" value="" tabindex="19" placeholder="Tél Parents">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-phone-alt"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="prof_ben" class="col-lg-4 control-label">Profession du bénéficiare *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="prof_ben" id="prof_ben" type="text" value="" tabindex="20" placeholder="Profession du bénéficiare">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-briefcase"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="prof_pere" class="col-lg-4 control-label">Profession du pére *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="prof_pere" id="prof_pere" type="text" value="" tabindex="21" placeholder="Profession du pére">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-briefcase"></span>
                        </span>
                      </div>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label for="prof_mere" class="col-lg-4 control-label">Profession de la mére *</label>
                  <div class="col-lg-6">
                    <div class="input-group">
                        <input class="form-control" name="prof_mere" id="prof_mere" type="text" value="" tabindex="22" placeholder="Profession de la mére">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-briefcase"></span>
                        </span>
                      </div>
                  </div>
                </div>	



                <div class="form-group col-lg-12">
                  <div class="col-lg-6 col-lg-offset-4">
                    <input type="submit"  class="btn btn-valide" id="send-message" value="s\'inscrire" tabindex="23">
                  </div>
                </div>
              </fieldset>
            </form>';}
          ?>
        </div>
      </div>
    </div>
    <?php include("../Layouts/footerstatic.php");?>
</body>
</html>