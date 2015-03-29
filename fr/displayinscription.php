<?php
 
include_once './Classes/inscription.class.php';

 class displayinscription{

 	public function inscriptionForm() {
        echo'  <h2>Formulaire d inscription</h2>
               <p>Veuillez renseigner tous les champs obligatoires(<span class="required">*</span>)</p>
               <form action="" method="post" id="cform" name="cform">
                <ul id="homehireus" >
                  <li>
                    <label>Nom:<span class="required">*</span></label><br>
                    <input name="nom" id="name" type="text" value="" tabindex="1">
                  </li>
                  <li>
                    <label>Prénom:<span class="required">*</span></label><br>
                    <input name="prenom" id="prenom" type="text" value="" tabindex="2">
                  </li>
                  <li>
                    <label>Date de naissance:<span class="required">*</span></label><br>
                    <input name="date_naissance" id="date" type="date" value="" tabindex="3">
                  </li>
                  <li>
                    <label>Numero de la carte Nationale(CIN):<span class="required">*</span></label><br>
                    <input name="cin" id="cin" type="text" value="" tabindex="4">
                  </li>
                  <li>
                    <label>Tél:<span class="required">*</span></label><br>
                    <input name="tel" id="phone" type="number" value="" tabindex="5">
                  </li>
                  <li>
                    <label>Email:<span class="required">*</span></label><br>
                    <input name="email" id="email" type="email" value="" tabindex="6">
                  </li>
                  <li>
                    <label>Dernier diplome obtenu:<span class="required">*</span></label>
                    <br>
                    <select name="diplome" id="diplome"  tabindex="7" >
                      <option value="" selected>--Choisir--</option>
                      <option value="bac+2">bac+2</option>
                      <option value="bac+3">bac+3</option>
                      <option value="bac+4">bac+4</option>
                      <option value="autre">autre</option>
                    </select>
                  </li>
                  <li>
                    <label>Etablissement:<span class="required">*</span></label><br>
                    <input name="etablissment" id="ecole" type="text" value="" tabindex="8">
                  </li>
                  <li>
                    <label>Formation souhaitée:<span class="required">*</span></label><br>
                    <select name="formation" id="formation"  tabindex="9" >
                      <option value="" selected>--Choisir--</option>
                      <option value="Master informatique">Master informatique</option>
                      <option value="License systemes d information">License systemes d information</option>
                      <option value="license Administration réseaux">license Administration réseaux</option>
                      <option value="License Ingénierie du logiciel">License Ingénierie du logiciel</option>
                    </select>
                  </li>
                  <li>
                    <label>Lettre de motivation:<span class="required">*</span></label><br>
                    <textarea name="lettre_motivation" id="message" tabindex="10"></textarea>
                  </li>
                  <li>
                    <br>
                    <input type="button"  class="button large" id="send-message" value="inscrire" tabindex="10">
                    <div id="output" class="contactpage-msg"></div>
                  </li>              
                </ul>
             </form>';
 	} 
}
 ?>