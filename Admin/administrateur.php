<?php 
$title="ENSA Khouribga - Administrateur";
include("../Layouts/headstatic.php");
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php $administrateur="current";
      include("../Layouts/menuadmin.php");?>
      <div class="clear"></div>	  
    </header>  
  </div>

	<div class="body">			
    <form action="ajouter_formations.php" method="post" class="sky-form" enctype="multipart/form-data">
	     <header>
          <h1>Nouveau Formations</h1>
       </header>
       <fieldset>
    	   <div class="row">  
            <section class="col col-6">
              <label class="label">Id Formations:</label>
              <label class="input"><i class="icon-append icon-key"></i>
              <input name="id_formations" id="id_formations" type="text" value="" tabindex="1"></label>
            </section>

            <section class="col col-6">
			        <label class="label">Titre du Menu:</label>
              <label class="input"><i class="icon-append icon-info"></i>
              <input name="menu_titre" id="menu_titre" type="text" value="" tabindex="2"></label>
            </section>

		        <section class="col col-6">
              <label class="label">Niveau:</label>
              <label class="input"><i class="icon-append icon-info"></i>
              <input name="niveau" id="niveau" type="text" value="" tabindex="3"></label>
            </section>	

		        <section class="col col-6">
              <label class="label">Logos:</label>
              <label class="input"><i class="icon-append icon-picture"></i>
              <input type="hidden" name="MAX_FILE_SIZE" value="100048576" />
              <input type="file" name="logo" id="logo" tabindex="4"/></label>
            </section>	

            <section class="col col-6">
              <label class="label">Titre:</label>
              <label class="input"><i class="icon-append icon-info"></i>
              <input name="titre" id="titre" type="text" value="" tabindex="5"></label>
            </section>

            <section class="col col-6">
              <label class="label">Nombre de Semestre:</label>
              <label class="input"><i class="icon-append icon-info"></i>
              <input name="nbr_semestre" id="nbr_semestre" type="text" value="" tabindex="6"></label>
            </section>	

		       <section class="col col-6">
              <label class="label">Domaine:</label>
              <label class="input"><i class="icon-append icon-info"></i>
              <input name="domaine" id="domaine" type="text" value="" tabindex="7"></label>
           </section>

            <section class="col col-6">
              <label class="label">Type de formations:</label>
              <label class="input"><i class="icon-append icon-info"></i>
              <input name="type_formations" id="type_formations" type="text" value="" tabindex="8"></label>
            </section>	

			     <section class="col col-6">
              <label class="label">Durée:</label>
              <label class="input"><i class="icon-append icon-time"></i>
              <input name="duree" id="duree" type="text" value="" tabindex="9"></label>
            </section>	

		        <section class="col col-6">
              <label class="label">Email:</label>
              <label class="input"><i class="icon-append icon-envelope-alt"></i>
              <input name="email" id="email" type="email" value="" tabindex="10"></label>
            </section>

             <section class="col col-6">
              <label class="label">Télephone:</label>
              <label class="input"><i class="icon-append icon-phone"></i>
              <input name="telephone" id="phone" type="text" value="" tabindex="11"></label>
              </section>

            <section class="col col-6">
              <label class="label">Fax:</label>
              <label class="input"><i class="icon-append fa-phone-square"></i>
              <input name="fax" id="fax" type="text" value="" tabindex="12"></label>
              </section>

		        <section class="col col-6">
              <label class="label">Débouché de la formation:</label>
              <label class="input"><i class="icon-append icon-picture"></i>
              <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
              <input name="icone" id="icone" type="file" tabindex="13"></label>
            </section>	

			       <section class="col col-6">
              <label class="label">Condition d'admission:</label>
              <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-info"></i>
              <textarea name="condition_admission" id="condition_admission" tabindex="14"></textarea></label>
            </section>	

			       <section class="col col-6">
              <label class="label">Organisation de la formation:</label>
              <label class="textarea textarea-expandable textarea-resizable"><i class="icon-append icon-info"></i>
              <textarea name="organisation_formations" id="organisation_formations" tabindex="15"></textarea></label>
            </section>

            <section class="col col-6">
              <label class="label">Calendrier Date de depot dossier:</label>
              <label class="input"><i class="icon-append icon-calendar"></i>
              <input name="date_depot" id="date_depot" type="text" value="" tabindex="16"></label>
            </section>  

            <section class="col col-6">
              <label class="label">Calendrier Date d'entretien:</label>
              <label class="input"><i class="icon-append icon-calendar"></i>
              <input name="date_entretien" id="date_entretien" type="text" value="" tabindex="17"></label>
            </section>  	

			     <section class="col col-6">
              <label class="label">Frais De Formations:</label>
              <label class="input"><i class="icon-append icon-money"></i>
              <input name="frais_formations" id="frais_formations" type="text" value="" tabindex="18"></label>
            </section>  

          <section class="col col-6">
              <label class="label">Frais D'entretien:</label>
              <label class="input"><i class="icon-append icon-money"></i>
              <input name="frais_entretien" id="frais_entretien" type="text" value="" tabindex="19"></label>
            </section>  

          <section class="col col-6">
              <label class="label">Partenaire Logo:</label>
              <label class="input"><i class="icon-append icon-picture"></i>
              <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
              <input type="file" name="sponsor" id="sponsor" tabindex="20"/></label>
          </section>  	
        </div>	
      </fieldset>

			 <footer>
        <input type="submit"  class="button large" id="send-message" value="Ajouter" tabindex="21" style="width:30%; margin-right:340px;">
      </footer>
    </form>      
  </div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>