<?php 
if(!$connect=mysql_connect("localhost","root","")) mysql_error();
if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
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
        <h1>Mettre A jour une Formations</h1>
      </header>
      <fieldset>
        <div class="row">
          <section class="col col-6">
            <label class="label">Formation souhaitée:</label>
            <label class="select"><i class="icon-append icon-chevron-down"></i>
              <select name="id_page" id="formation"  tabindex="1" >
                <option value="" selected>--Choisir--</option>
                  <?php 
                  $all=mysql_query("select * from formations");    
                  while($ligne=mysql_fetch_array($all)){     
                  echo '<option value="'.$ligne[0].'" name="id_page">'.$ligne[2].' '.$ligne[1].'</option>';
                  }
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
        <h1>Mettre a jour Semestre d'une Formations</h1>
      </header>
      <fieldset>
        <div class="row">
          <section class="col col-6">
            <label class="label">Formation souhaitée:</label>
            <label class="select"><i class="icon-append icon-chevron-down"></i>
              <select name="id_page" id="formation"  tabindex="1" >
                <option value="" selected>--Choisir--</option>
                  <?php 
                  $all=mysql_query("select * from formations");     
                  while($ligne=mysql_fetch_array($all)){
                  echo '<option value="'.$ligne[0].'">'.$ligne[2].' '.$ligne[1].'</option>';
                  }
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
  </div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>