<?php 
include("../Model/connect.php");
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
      <?php 
      $administrateur1="current";
      include("../Layouts/menuadmin.php");
      ?>
      <div class="clear"></div>   
    </header>  
  </div>

  <div class="body">      
    <form action="update_formations.php" method="post" class="sky-form" enctype="multipart/form-data">
      <header>
        <h1>Mettre à jour une formation</h1>
      </header>
      <fieldset>
        <div class="row">
          <section class="col col-6">
            <label class="label">Formation souhaitée:</label>
            <label class="select"><i class="icon-append icon-chevron-down"></i>
              <select name="id_page" id="formation"  tabindex="1" >
                <option value="" selected>--Choisir--</option>
                  <?php 
                  include("../Model/functdb.php");
                  $functdb = new functdb();
                  $functdb->getformationline();
                  ?>
              </select>
            </label>
          </section>
        </div>  
      </fieldset>
      <footer>
       <input type="submit"  class="button large" value="Entrer" tabindex="2" style="width:30%; margin-right:340px;">
      </footer>
    </form>

    <br>

    <form action="ajouter_semestre.php" method="post" class="sky-form" enctype="multipart/form-data">
      <header>
        <h1>Mettre à jour les semestres d'une formation</h1>
      </header>
      <fieldset>
        <div class="row">
          <section class="col col-6">
            <label class="label">Formation souhaitée:</label>
            <label class="select"><i class="icon-append icon-chevron-down"></i>
              <select name="id_page" id="formation"  tabindex="3" >
                <option value="" selected>--Choisir--</option>
                  <?php 
                  $functdb->getformationline();
                  ?>
              </select>
            </label>
          </section>
        </div>  
      </fieldset>
      <footer>
        <input type="submit"  class="button large" value="Entrer" tabindex="4" style="width:30%; margin-right:340px;">
      </footer>
    </form>     
  </div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>