<?php
$title="ENSA Khouribga - Ingénierie des systèmes d’information";
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
		    <?php $id = 'lsi'; include("menu.php");  ?>
		    <!--/ mega menu -->
      </article>

      <article class="faceb">
    	 <a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
   		</article>
     
      <div class="clear"></div>	  
    </header>
  </div>

  <div class="container_12 mar-left1 tol sky"> 

    <article class="grid_13 last-col ">
      <h1 class="hello_box">License universitaire en sciences appliquées Ingénierie des systèmes d’information</h1>
    </article>

    <article class="grid_5">
      <h2>Contenu de la formation</h2>
      <div class="linnee">
        <div class="sky-tabs sky-tabs-pos-top-justify sky-tabs-anim-slide-up-right sky-tabs-response-to-icons ">
          <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1" >
          <label for="sky-tab1"><span><span>Semestre 1</span></span></label>
          <input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2" >
          <label for="sky-tab2"><span><span>Semestre 2</span></span></label>	

          <ul>
   	        <li class="sky-tab-content-1">	  
      			 <ul>
              <li><strong>M1 :</strong>Techniques de programmation et conception logiciels : Java et UML</li>
              <li><strong>M2 :</strong>Bases de données</li>
              <li><strong>M3 :</strong>Système d’exploitation et réseau</li>
              <li><strong>M4 :</strong>Langue et Technique de Communication </li>
              <li><strong>M5 :</strong>Sécurité des réseaux et Systèmes d’Information</li>
             </ul>
            </li>

            <li class="sky-tab-content-2">	  
      			 <ul>
              <li><strong>M6 :</strong>Java avancé J2EE et développement Web</li>
              <li><strong>M7 :</strong>Interface Home Machine en Java et DotNet</li>
              <li><strong>M8 :</strong>Le management des  projets de l’Entreprise</li>
              <li><strong>M8 :</strong>Stage et  projet de fin d’études (PFE) </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </article>

    <article class="grid_5">
      <h2>informations generales</h2>
      <div class="linnee">
        <ul>
          <li><strong>Domaine : </strong> Informatique</li>
          <li><strong>Type de formation : </strong> Formation professionnelle</li>
          <li><strong>Niveau :</strong>  license</li>
          <li><strong>Durée :</strong> 12 mois</li>
          <li><strong>Lieu : </strong> ENSA Khouriga</li>
          <li><strong>Email : </strong> ensak.formations@gmail.com)</li>
          <li><strong>Téléphone : </strong> 06 61 15 07 21 / 05 23 49 23 35</li>
          <li><strong>Fax :</strong>  05 23 49 23 39</li>
         </ul>
         <br>
      </div>
    </article>

    <article class="grid_5">
      <h2>La formation</h2>
      <div id="accordion">
        <h3> débouché de la formation</h3>
        <div> 
            <img src="../images/lar.jpg">
        </div>
        <h3> Condition d'admission</h3>
        <div> Etre titulaire d’un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT … )</div>
        <h3>Organisation de la formation</h3>
        <div> Samedi et dimanche : Du 20/10/2014 au 14/07/15</div>
        <h3>Calendrier à retenir </h3>
        <div>
          <ul>
            <li><strong>avant le 15/09/2014 :</strong> dépot du dossier de candidature</li>
            <li><strong>Du 22 au 30/09/2014 : </strong> Entretien de séléction</li>
          </ul>
        </div>
        <h3>Les frais</h3>
        <div> 
          <ul>
            <li><strong>frais de formation :</strong> 30 000 Dhs</li>
            <li><strong>frais d'entretien : </strong> 600 Dhs</li>
          </ul>
        </div> 
    </article>

    <article class="grid_10 lhata">
      <div style="text-align:center"> <img src="../images/sponsor-lsi.jpg"> </div>
    </article>
  </div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>
