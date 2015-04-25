<?php include "../Model/connect.php" ;?>
	


	<div class="navbar menu">
      <div class="container">
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">

            <li><a href="index.php" class="<?php  if($id == 'test_index') { echo "active"; } ?> button-nav">Accueil</a></li>

            <li><a href="ensak.php" class="<?php  if($id == 'ensak') { echo "active"; } ?> button-nav">ENSA Khouribga</a></li>

            <li>
              <a class="button-nav" data-toggle="collapse" href="#listeFormation" aria-expanded="false" aria-controls="listeFormation">
              Nos Formations <b class="caret"></b>
              </a>
            </li>

            <li><a href="inscription.php" class="<?php  if($id == 'inscription') { echo "active"; } ?> button-nav">Inscription</a></li>

          </ul>
        </div>
      </div>
    </div>


    <!-- liste formation -->
    <div class="collapse" id="listeFormation">
      <div class="container">
        <div class="col-lg-12">
        	<?php 
          $all_niveau=$_db->query("select DISTINCT niveau from formations");
          $all_niveau->setFetchMode(PDO::FETCH_NUM);
          while($niveau=$all_niveau->fetch()){ 
            ?>
          	<div class="col-lg-3">
	            <legend></i><?php echo $niveau[0]; ?></legend>
	            <ul class="nav nav-pills nav-stacked">
	            	<?php 
                      $all_menu_titre=$_db->query("select * from formations where niveau='$niveau[0]'");
                      $all_menu_titre->setFetchMode(PDO::FETCH_NUM);
                      while($menu_titre=$all_menu_titre->fetch()){ 
        	        ?>
	              	<li><a href="formations.php?id_page=<?php echo $menu_titre[0] ; ?>" class="btn btn-nav-pills"><?php echo $menu_titre[1] ; ?></a></li>
	              	<?php  } ?>
	            </ul>
          	</div>
          	<?php  } ?>
        </div>
      </div>
    </div>
