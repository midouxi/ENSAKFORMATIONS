<?php 

// EDIT THE FOLLOWING LINE BELOW AS REQUIRED

$send_email_to = "ensak.formations@gmail.com";

function send_email($name,$prenom,$date,$cin,$email,$phone,$diplome,$ecole,$formation,$subject,$message {
  global $send_email_to;  
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
  $headers .= "From: ".$email. "\r\n"; 
  $message1 = "<strong>Nom : </strong>".$name."<br>";
  $message1 .= "<strong>prenom : </strong>".$prenom."<br>";
  $message1 .= "<strong>date de naissance : </strong>".$date."<br>"; 
  $message1 .= "<strong>cin  : </strong>".$cin."<br>";  
  $message1 .= "<strong>numéro du téléphone  : </strong>".$phone."<br>";
  $message1 .= "<strong>Email :  </strong>".$email."<br>";   
  $message1 .= "<strong>Diplome :  </strong>".$diplome."<br>";
  $message1 .= "<strong>etablissement  : </strong>".$ecole."<br>";  
  $message1 .= "<strong>condidature pour la formation : </strong>".$formation."<br>"; 
  $message1 .= "<strong>Lettre de motivation : </strong> <br>".$message."<br>";
  @mail($send_email_to, $subject, $message1,$headers);
  return true;
}

function validate($name,$prenom,$date,$cin,$email,$phone,$diplome,$ecole,$formation,$message,$subject) {
  $return_array = array();
  $return_array['success'] = '1';
  $return_array['name_msg'] = ''; 
  $return_array['prenom_msg'] = '';
  $return_array['date_msg'] = '';
  $return_array['cin_msg'] = ''; 
  $return_array['email_msg'] = '';
  $return_array['phone_msg'] = '';
  $return_array['diplome_msg'] = '';
  $return_array['ecole_msg'] = '';
  $return_array['formation_msg'] = '';
  $return_array['message_msg'] = '';
  $return_array['subject_msg'] = '';
  
 if($email == '') {
    $return_array['success'] = '0';
    $return_array['email_msg'] = 'email manquant';
  } else {
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email)) {
      $return_array['success'] = '0';
      $return_array['email_msg'] = 'Entrez une adresse email valide.';  
    }
  }

  if($name == '') {
    $return_array['success'] = '0';
    $return_array['name_msg'] = 'Nom manquant';
  } else {
     $string_exp = "/^[A-Za-z .'-]+$/";
    if (!preg_match($string_exp, $name)) {
      $return_array['success'] = '0';
     $return_array['name_msg'] = 'entrer un nom valide.';
    }
  }
  

  if($subject == '') {
    $return_array['success'] = '0';
    $return_array['subject_msg'] = 'Subject is required';
  }
  
  if($message == '') {
    $return_array['success'] = '0';
    $return_array['message_msg'] = 'Message is required';
  } else {
    if (strlen($message) < 2) {
      $return_array['success'] = '0';
      $return_array['message_msg'] = 'Enter valid Message.';
    }
  }   
  return $return_array;
}

$name = $_POST['name'];
$prenom = $_POST['prenom'];
$date = $_POST['date'];
$cin = $_POST['cin'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$diplome = $_POST['diplome'];
$ecole = $_POST['ecole'];
$formation = $_POST['formation'];
$message = $_POST['message'];
$subject =  "Demande d'inscription au ".$formation."";



$return_array = validate($name,$prenom,$date,$cin,$email,$phone,$diplome,$ecole,$formation,$message,$subject);
if($return_array['success'] == '1') {
  send_email($name,$prenom,$date,$cin,$email,$phone,$diplome,$ecole,$formation,$subject,$message);
}
header('Content-type: text/json');
echo json_encode($return_array);
die();
?>
