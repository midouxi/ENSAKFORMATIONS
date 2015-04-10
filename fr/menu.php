<?php include "../Model/connect.php" ;?>
<ul class="sky-mega-menu sky-mega-menu-anim-flip sky-mega-menu-response-to-icons" style="width:800px;">
	<!-- home -->
	<li <?php  if($id == 'test_index') { ?>class="current"<?php }?> >
		<a href="index.php"><i class="fa fa-home"></i>Acceuil</a>
	</li>
	<!--/ home -->
	<!-- formations -->
	<li aria-haspopup="true"  <?php  if($id == 'inscription' ) { ?>class="current"<?php }?>>
		<a href="#"><i class="fa fa-sitemap"></i>Nos Formations<i class="fa fa-indicator fa-chevron-down"></i></a>
		<div class="grid-container3">
			<ul>
				<li <?php  if($id == 'inscription') { ?>class="current"<?php }?> ><a href="inscription.php"><i class="fa fa-tasks"></i>Inscription</a></li>
					<?php $all_niveau=mysql_query("select DISTINCT niveau from formations");
        	              while ($niveau=mysql_fetch_array($all_niveau)) { ?>
				<li aria-haspopup="true">
					<a href="#"><i class="fa fa-certificate"></i><i class="fa fa-indicator fa-chevron-right"></i><?php echo $niveau[0] ; ?></a>
					<div class="grid-container3">
						<ul>
							<?php 
        	            	  $all_menu_titre=mysql_query("select * from formations where niveau='$niveau[0]'");
        	            	  while ($menu_titre=mysql_fetch_array($all_menu_titre)) {
        	            	?>
							<li aria-haspopup="true" <?php  if($id == $menu_titre[0]) { ?>class="current"<?php }?> >
								<a href="test.php?id_page=<?php echo $menu_titre[0] ; ?>"><i class="fa fa-check"></i><?php echo $menu_titre[1] ; ?></a>
							</li>
							<?php  } ?>
						</ul>
					</div>
				</li>
				<?php  } ?>
			</ul>
		</div>
	</li>
	<!--/ formations -->
	<!-- ensak -->
	<li aria-haspopup="true"  <?php  if($id == 'ensak') { ?>class="current"<?php }?> >
		<a href="../fr/ensak.php"><i class="fa fa-info"></i>ENSA Khouribga</a>
	</li>
	<!--/ ensak -->
	<!-- contact -->
	<li aria-haspopup="true"  <?php  if($id == 'contacts') { ?>class="current"<?php }?> >
		<a href="../fr/contacts.php"><i class="fa fa-phone"></i>Contacts</a>
	</li class="right">
	<!--/ contact -->
    
</ul>