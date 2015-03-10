			
            <ul class="sky-mega-menu sky-mega-menu-anim-flip sky-mega-menu-response-to-icons" style="width:800px;">
				<!-- home -->
				<li <?php  if($id == 'index') { ?>class="current"<?php }?> >
					<a href="index.php"><i class="fa fa-home"></i>Acceuil</a>
				</li>
				<!--/ home -->
				<!-- formations -->
				<li aria-haspopup="true"  <?php  if($id == 'mi' OR $id == 'lil' OR $id == 'lar' OR $id == 'lsi') { ?>class="current"<?php }?>>
					<a href="#"><i class="fa fa-sitemap"></i>Nos Formations<i class="fa fa-indicator fa-chevron-down"></i></a>
					<div class="grid-container3">
						<ul>
							<li <?php  if($id == 'inscription') { ?>class="current"<?php }?> ><a href="inscription.php"><i class="fa fa-tasks"></i>Inscription</a></li>
							<li aria-haspopup="true"  <?php  if($id == 'lil' OR $id == 'lar' OR $id == 'lsi') { ?>class="current"<?php }?>>
								<a href="#"><i class="fa fa-certificate"></i><i class="fa fa-indicator fa-chevron-right"></i>License</a>
								<div class="grid-container3">
									<ul>
										<li aria-haspopup="true" <?php  if($id == 'lil') { ?>class="current"<?php }?> >
											<a href="lil.php"><i class="fa fa-check"></i>Génie logiciel</a>
										</li>
										<li aria-haspopup="true" <?php  if($id == 'lar') { ?>class="current"<?php }?> >
											<a href="lar.php"><i class="fa fa-check"></i>Administration réseaux</a>
										</li>
										<li aria-haspopup="true" <?php  if($id == 'lsi') { ?>class="current"<?php }?> >
											<a href="lsi.php"><i class="fa fa-check"></i>Systeme d'information</a>
										</li>
									</ul>
								</div>
							</li>
                            <li aria-haspopup="true" <?php  if($id == 'mi') { ?>class="current"<?php }?> >
								<a href="#"><i class="fa fa-certificate"></i>Masters<i class="fa fa-indicator fa-chevron-right"></i></a>
								<div class="grid-container3">
									<ul>
										<li aria-haspopup="true"  <?php  if($id == 'mi') { ?>class="current"<?php }?> >
											<a href="mi.php"><i class="fa fa-check"></i>Informatique</a>
										</li>
									</ul>
								</div>
							</li>
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