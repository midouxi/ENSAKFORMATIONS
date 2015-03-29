<?php
$title="ENSA Khouribga - Présentation";
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
		    <?php $id = 'ensak'; include("menu.php");  ?>
        <!--/ mega menu -->
      </article>

      <article class="faceb">
        <a href="https://www.facebook.com/ensak.formations"><i class="fa fa-facebook fa-3x"></i></a>
   		</article>

      <div class="clear"></div>	  
   </header>  
  </div>

  <div class="container_12 mar-left1 sky"> 
    <article class="grid_13 last-col">
      <h1 class="hello_box">Ecole Nationale des sciences appliquées Khouribga</h1>
    </article>
    <article class="grid_10">
      <img src="../images/ensak_.png" style="float:left; margin-right:20px" >
        <div>
          <?php
            $file="../Textos/text_ensak.txt";
            $id_file=fopen($file,"r");
            while($ligne=fgets($id_file,4000) )
            {
              $tab=explode (" ",$ligne);
              if (strcasecmp($tab[0], '•') != 0) {
                echo "<p>$ligne</p>";
                }else{
                  echo "$ligne</br>";
              }

              }
              fclose($id_file);
          ?>
       </div>
      </article>

    <article class="grid_5" style="margin-bottom:20px">
      <h2>Plan d'acces</h2>
        <div>
          <iframe width="380" height="270" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=%C3%89cole+Nationale+des+Sciences+Appliqu%C3%A9es,+Khouribga,+Chaouia-Ouardigha,+Maroc&amp;aq=0&amp;oq=Ecole+Nationale+des+Sciences+Appliqu%C3%A9es+khouri&amp;sll=46.75984,1.738281&amp;sspn=9.017215,19.753418&amp;ie=UTF8&amp;hq=%C3%89cole+Nationale+des+Sciences+Appliqu%C3%A9es,&amp;hnear=Khouribga,+Khouribga+Province,+Chaouia-Ouardigha,+Maroc&amp;ll=32.896895,-6.913702&amp;spn=0.029836,0.030144&amp;t=m&amp;output=embed"></iframe><br /><small><a href="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=%C3%89cole+Nationale+des+Sciences+Appliqu%C3%A9es,+Khouribga,+Chaouia-Ouardigha,+Maroc&amp;aq=0&amp;oq=Ecole+Nationale+des+Sciences+Appliqu%C3%A9es+khouri&amp;sll=46.75984,1.738281&amp;sspn=9.017215,19.753418&amp;ie=UTF8&amp;hq=%C3%89cole+Nationale+des+Sciences+Appliqu%C3%A9es,&amp;hnear=Khouribga,+Khouribga+Province,+Chaouia-Ouardigha,+Maroc&amp;ll=32.896895,-6.913702&amp;spn=0.029836,0.030144&amp;t=m" style="color:#0000FF;text-align:left"></a></small>
        </div>
    </article>
  </div>
<?php include "../Layouts/footerstatic.php"; ?>  
</body>
</html>
