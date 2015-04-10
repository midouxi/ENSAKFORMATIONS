<?php 
  $title="ENSA Khouribga - Administrateur";
  include("../Layouts/headstatic.php");
  //session_start();
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
      $role="current";
      include("../Layouts/menuadmin.php");
      ?>
      <div class="clear"></div>   
    </header>  
  </div>
<form action="update_account_result.php" method="post" class="sky-form" id="cform" name="cform">
  <header>
    <h1>Ajouter un compte</h1>
    <div class="note">Veuillez renseigner tous les champs obligatoires(<span class="required">*</span>)</div>
  </header>
  <fieldset>
    <?php 
    include "../Model/functdb.php";
    $functdb = new functdb();
    ?>
   <div class="row">      
      <section class="col col-6">
        <label class="label">Email<span class="required">*</span></label>
        <label class="input"><i class="icon-append icon-user"></i>
        <input name="email" id="email" type="email" value=<?php echo $functdb->getinfoaccount($_POST['id_c'],"email"); ?> tabindex="1"></label>
      </section>  
     <section class="col col-6">
        <label class="label">Mot de passe<span class="required">*</span></label>
        <label class="input"><i class="icon-append icon-user"></i>
        <input name="mdp" id="mdp" type="text" value=<?php echo $functdb->getinfoaccount($_POST['id_c'],"mdp"); ?> tabindex="2"></label>
      </section>  
      <section class="col col-6">
        <label class="label">Filière<span class="required">*</span></label>
        <label class="select"><i class="icon-append icon-chevron-down"></i>
        <select name="filiere" id="filiere"  tabindex="7" >\
        <?php if($functdb->getinfoaccount($_POST['id_c'],"filiere")=="lar") { 
                $select1="selected";}
              else if($functdb->getinfoaccount($_POST['id_c'],"filiere")=="lsi") { 
                $select2="selected";}
              else if($functdb->getinfoaccount($_POST['id_c'],"filiere")=="lil") { 
                $select3="selected";}
              else if($functdb->getinfoaccount($_POST['id_c'],"filiere")=="mi") { 
                $select4="selected";}
              else if($functdb->getinfoaccount($_POST['id_c'],"filiere")=="admin") { 
                $select5="selected";}
        ?>
            <option value="" <?php echo $select0; ?>>--Choisir--</option>
            <option value="lar" <?php echo $select1; ?>>Licence Administration réseaux</option>
            <option value="lsi" <?php echo $select2; ?>>Licence Systèmes d\'informations</option>
            <option value="lil" <?php echo $select3; ?>>Licence Ingenierie Logicielle</option>
            <option value="mi"  <?php echo $select4; ?>>Master Informatique</option>
            <option value="admin" <?php echo $select5; ?>>ALL (Admin)</option>
        </select></label>
      </section>  
     <section class="col col-6">
        <label class="label">Type<span class="required">*</span></label>
        <label class="select"><i class="icon-append icon-chevron-down"></i>
        <select name="type" id="type"  tabindex="8" >
        <?php if($functdb->getinfoaccount($_POST['id_c'],"type")=="admin") { 
                $select1="selected";}
              else if($functdb->getinfoaccount($_POST['id_c'],"type")=="editeur") { 
                $select2="selected";}
        ?>
            <option value="" <?php echo $select0; ?>>--Choisir--</option>
            <option value="admin" <?php echo $select1; ?>>Administrateur</option>
            <option value="editeur" <?php echo $select2; ?>>Editeur</option>
        </select></label>
      </section>    
      <input type="hidden" name="id_c" value=<?php echo $_POST['id_c']; ?> >
    </div>  
  </fieldset>
  <footer>
    <input type="submit"  class="button large" id="send-message" value="Mettre à jour" tabindex="10" style="width:30%; margin-right:340px;">
  </footer>
</body>
</html>