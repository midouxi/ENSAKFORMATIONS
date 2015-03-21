<?php
include_once '../Classes/siteadmin.class.php';

 class displaysiteadmin{

 	public function signForm()
 	{
 		echo '<form action="" class="sky-form" method="post">
                <header>Connexion</header>
                            
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
                                    <input type="password" name="mdp_siteadmin">
                                </label>
                            </div>
                        </div>
                    </section>
                </fieldset>

                <footer>
                    <button type="submit" class="button large">Se connecter</button>
                </footer>
            </form>';
 	}

 }
?>