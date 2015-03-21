<?php
$title="Contact";
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
			<?php $id = 'contacts'; include("menu.php");  ?>
			<!--/ mega menu -->
            </article>
            <article class="faceb">
        	<a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
     		</article>
     
      <div class="clear"></div>	  
    </header>   
  </div>
  <div class="container_12 mar-left1 sky"> 
    
		  <article class="grid_10">
            <h2>contact</h2>
            <div>
             <ul>
             	  <li>École Nationale des Sciences Appliquées, Bd Béni Amir, BP 77, Khouribga - Maroc</li>
                <li><strong>Responsable : </strong> Pr Imad Hafidi</li>
                <li><strong>Email : </strong> ensak.formations@gmail.com</li>
                <li><strong>Téléphone : </strong> 06 62 05 77 69 / 05 23 49 23 35</li>
                <li><strong>Fax :</strong>  05 23 49 23 39</li>
             </ul>
            </div>
          </article>
      <?php include("../Layouts/slider.php");?>         
  </div>
<?php include("../Layouts/footerstatic.php");?>
</body>
</html>