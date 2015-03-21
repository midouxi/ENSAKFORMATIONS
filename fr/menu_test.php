			<?php 
		
                   
                    if(!$connect=mysql_connect("localhost","root","")) mysql_error();
                    if(!$db=mysql_select_db("db_fc",$connect)) mysql_error();
            ?>
            <ul class="sky-mega-menu sky-mega-menu-anim-flip sky-mega-menu-response-to-icons" style="width:800px;">
				<!-- home -->
				<li <?php  if($id == 'test_index') { ?>class="current"<?php }?> >
					<a href="test_index.php"><i class="fa fa-home"></i>Acceuil</a>
				</li>
				<!--/ home -->
				<!-- formations -->
				<li aria-haspopup="true"  <?php  if($id == 'inscription' ) { ?>class="current"<?php }?>>
					<a href="#"><i class="fa fa-sitemap"></i>Nos Formations<i class="fa fa-indicator fa-chevron-down"></i></a>
					<div class="grid-container3">
						<ul>
							<li <?php  if($id == 'inscription') { ?>class="current"<?php }?> ><a href="inscription.php"><i class="fa fa-tasks"></i>Inscription</a></li>
							<?php 
		                                  $all_niveau=mysql_query("select DISTINCT niveau from formations");
		                                  
		                                  while ($niveau=mysql_fetch_array($all_niveau)) {
		                    ?>
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
										<?php  }
                            			?>
									</ul>
								</div>
							</li>
							<?php  }
                            ?>
                           
						</ul>
					</div>
				</li>
				<!--/ formations -->
				<!-- ensak -->
				<li aria-haspopup="true"  <?php  if($id == 'ensak') { ?>class="current"<?php }?> >
					<a href="ensak.php"><i class="fa fa-info"></i>ENSA Khouribga</a>
				</li>
				<!--/ ensak -->
				<!-- contact -->
				<li aria-haspopup="true"  <?php  if($id == 'contacts') { ?>class="current"<?php }?> >
					<a href="contacts.php"><i class="fa fa-phone"></i>Contacts</a>
				</li class="right">
				<!--/ contact -->
                <!-- login admin -->
				<li aria-haspopup="true" class="right">
					<a href="#"><i class="fa fa-sign-in"></i>Login Administrateur<i class="fa fa-indicator fa-caret-down"></i></a>
					<div class="grid-container5">
						<?php 
        
                            include_once "admin.class.php";
                            include_once "adminmanager.php";
                            include_once "displayadmin.php";
        
        
                            $displayadmin = new displayadmin();
        
                            if(empty($_POST['email']) AND empty($_POST['mdp_admin']))
                            {
                                    $displayadmin->signForm();
                            }
                            else
                            {
                               $adminmanager = new adminmanager();
                               $admin = $adminmanager->get($_POST['email']);
                              if($admin){
        
                                if(!$admin->verifyPassword($_POST['mdp_admin'])) 
                                {
                                     echo 'accès refusé <hr>';
                                    $displayadmin->signForm();
                                }
                                else
                                {
                                  $_SESSION['email'] = $admin->email;
                                  $_SESSION['mdp_admin'] = $admin->mdp_admin;
                                   ?>
                                    <script> 
									window.location.href="adminpage1.php"; 
									</script>
                                    <?php  
                                }
        
                              }
                              else
                              {
                                echo '<font color="red">accès refusé </font><hr>';
                                $displayadmin->signForm();
                              }
                            }
        
                      ?>
					</div>
				</li>
				<!--/ login admin -->
			</ul>