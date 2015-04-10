<?php 
  include("../Model/connect.php");
  $title="ENSA Khouribga - Administrateur";
  include("../Layouts/headstatic.php");
  session_start();
  //if (isset($_SESSION['email']) && isset($_SESSION['mdp'])&& $_SESSION['type']=="admin") { 
?>
<body>
  <div class="container_12 mar-left1"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <article class="grid_4" style="margin-right:50px">
        <a class="logo" href="../index.php"><img src="../images/ensa-uh-logo.png" style="width:100%"></a>
      </article>
      <?php 
      $administrateur1="current";
      include("../Layouts/menuadmin.php");
      ?>
      <div class="clear"></div>   
    </header>  
  </div>
<form action="add_account_result.php" method="post" class="sky-form" id="cform" name="cform">
	<header>
		<h1>Ajouter un compte</h1>
		<div class="note">Veuillez renseigner tous les champs obligatoires(<span class="required">*</span>)</div>
  </header>
  <fieldset>
	 <div class="row">			
      <section class="col col-6">
	 	    <label class="label">Email<span class="required">*</span></label>
        <label class="input"><i class="icon-append icon-user"></i>
        <input name="email" id="email" type="email" value="" tabindex="1"></label>
      </section>	
	   <section class="col col-6">
        <label class="label">Mot de passe<span class="required">*</span></label>
        <label class="input"><i class="icon-append icon-user"></i>
        <input name="mdp" id="mdp" type="text" value="" tabindex="2"></label>
      </section>	
      <section class="col col-6">
        <label class="label">Filière<span class="required">*</span></label>
        <label class="select"><i class="icon-append icon-chevron-down"></i>
        <select name="filiere" id="filiere"  tabindex="7" >
            <option value="" selected>--Choisir--</option>
            <option value="lar">Licence Administration réseaux</option>
            <option value="lsi">Licence Systèmes d'informations</option>
            <option value="lil">Licence Ingenierie Logicielle</option>
            <option value="mi">Master Informatique</option>
        </select></label>
      </section>  
	 	 <section class="col col-6">
        <label class="label">Type<span class="required">*</span></label>
        <label class="select"><i class="icon-append icon-chevron-down"></i>
        <select name="type" id="type"  tabindex="7" >
            <option value="" selected>--Choisir--</option>
            <option value="admin">Administrateur</option>
            <option value="editeur">Editeur</option>
        </select></label>
      </section>  	
    </div>	
  </fieldset>
  <footer>
    <input type="submit"  class="button large" id="send-message" value="Ajouter" tabindex="10" style="width:30%; margin-right:340px;">
  </footer>
</body>
</html>