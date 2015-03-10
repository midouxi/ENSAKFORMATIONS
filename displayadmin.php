<?php
 
include_once 'admin.class.php';

 class displayadmin{
	private function bienvenu($email)
 	{
 		echo " <h2><span>  Bienvenu " . strtoupper($email) . " </span></h2><br><br>" 
 		. '  <form class="sky-form" action="logoutadmin.php" method="post">

				<footer>
                  <input type ="submit" class="button" value="Déconnexion" />
				</footer>  
                
            </form>';


 	}
 
 	public function signForm()
 	{
 		echo '<form action="" class="sky-form" method="post">
                            <header>Administrateur</header>
                            
                            <fieldset>					
                                <section>
                                    <div class="row">
                                        <label class="label col col-4">E-mail</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-user"></i>
                                                <input type="email" name="email">
                                            </label>
                                        </div>
                                    </div>
                                </section>
                                
                                <section>
                                    <div class="row">
                                        <label class="label col col-4">Password</label>
                                        <div class="col col-8">
                                            <label class="input">
                                                <i class="icon-append icon-lock"></i>
                                                <input type="password" name="mdp_admin">
                                            </label>
                                        </div>
                                    </div>
                                </section>
                                
                            </fieldset>
                            <footer>
                                <button type="submit" class="button large">Connexion</button>
                            </footer>
                        </form>';
 	} 
	public function inviteadmin($session){
 		$this->bienvenu($session['email']);

 	}
	private function deconnection($email){
		echo ' <form action="logoutadmin.php" method="post" style="margin-top:3px;">

				
                  <input type ="submit" class="button" value="Déconnexion" />
				  
                
            </form>';


 	}
	public function dec($session){
 		$this->deconnection($session['email']);

 	}
 	
 }
 
?>