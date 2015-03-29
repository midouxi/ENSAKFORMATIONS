<?php
$title="ENSA Khouribga - Inscription";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">

      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>

      <article class="grid_3">
      <!-- mega menu -->
			<?php $id = 'inscription'; include("menu.php");  ?>
			<!--/ mega menu -->
      </article>

      <article class="faceb">
    	 <a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
   		</article>
     
      <div class="clear"></div>	  
    </header>
  </div>

	<div class="body">
  <?php
    include_once "../Classes/inscription.class.php";
    include_once "../Controller/inscriptionmanager.php";

    if(!(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['date_naissance']) OR empty($_POST['cin']) OR empty($_POST['tel']) OR empty($_POST['email']) OR empty($_POST['diplome']) OR empty($_POST['etablissment']) OR empty($_POST['formation']) OR empty($_POST['lettre_motivation']) OR empty($_POST['etat'])))
    {
      $inscriptionmanager = new inscriptionmanager();
      $inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['cin'], $_POST['tel'], $_POST['email'], $_POST['diplome'], $_POST['etablissment'], $_POST['formation'], $_POST['lettre_motivation'], $_POST['etat']);
      $inscriptionmanager->add($inscription);
      echo "<div class='sky'><h3>Féliciation Inscription réussite</h3>&nbsp;&nbsp;Vous recevrez un mail dans les prochaines jours quand votre inscription sera valider<br><br><br><br><br>Attention verifier aussi votre corrier indesrable!!<br>";
      echo '<a href="index.php">Revenire à la page d\'accueil</a></div>';
    }else{ echo '
							
        <form action="" method="post" class="sky-form" id="cform" name="cform">
        	<header>
        		<h1>Formulaire d\'inscription</h1>
        		<div class="note">Veuillez renseigner tous les champs obligatoires(<span class="required">*</span>)</div>
            </header>
            <fieldset>
            	<div class="row">
				
              <section class="col col-6">
				  <label class="label">Nom:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-user"></i>
                  <input name="nom" id="name" type="text" value="" tabindex="1"></label>
              </section>	
			  <section class="col col-6">
                  <label class="label">Prénom:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-user"></i>
                  <input name="prenom" id="prenom" type="text" value="" tabindex="2"></label>
              </section>	
			  <section class="col col-6">
                  <label class="label">Date de naissance:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-calendar"></i>
                  <input name="date_naissance" id="date" type="date" value="" tabindex="3"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Numero de la carte Nationale(CIN):<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-key"></i>
                  <input name="cin" id="cin" type="text" value="" tabindex="4"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Tél:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-phone"></i>
                  <input name="tel" id="phone" type="number" value="" tabindex="5"></label>
                </section>	
				<section class="col col-6">
                  <label class="label">Email:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-envelope-alt"></i>
                  <input name="email" id="email" type="email" value="" tabindex="6"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Dernier diplome obtenu:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                      <select name="diplome" id="diplome"  tabindex="7" >
                      <option value="" selected>--Choisir--</option>
                      <option value="bac+2">bac+2</option>
                      <option value="bac+3">bac+3</option>
                      <option value="bac+4">bac+4</option>
                      <option value="autre">autre</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Etablissement:<span class="required">*</span></label>
                  <label class="input"><i class="icon-append icon-home"></i>
                  <input name="etablissment" id="ecole" type="text" value="" tabindex="8"></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Formation souhaitée:<span class="required">*</span></label>
                  <label class="select"><i class="icon-append icon-chevron-down"></i>
                   <select name="formation" id="formation"  tabindex="9" >
                      <option value="" selected>--Choisir--</option>
                      <option value="License Ingenierie du logiciel">License Ingénierie du logiciel</option>
                      <option value="License Administration reseaux">License Administration réseaux</option>
                      <option value="License systemes information">License systemes d\'information</option>
                      <option value="Master informatique">Master informatique</option>
                      </select></label>
                </section>	
			  <section class="col col-6">
                  <label class="label">Lettre de motivation:<span class="required">*</span></label>
                  <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-comment"></i>
                 <textarea name="lettre_motivation" id="message" tabindex="10"></textarea></label>
                </section>
                </div>	
                </fieldset>
			 <footer>
               <input type="submit"  class="button large" id="send-message" value="s\'inscrire" tabindex="10" style="width:30%; margin-right:340px;">		<input type="hidden" name="etat" value="non Traiter">
                </footer>
            </form>';
          }
  ?>    
  </div>
<?php include("../Layouts/footerstatic.php");?>
  </body>
  </html>