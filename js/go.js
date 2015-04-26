function go(cin,type,id) {
	var val=null;
	if ($(id).is(":checked")) {  val=1;
	} else {  val=0;}
 var xhr = getXhr();
 // On défini ce qu'on va faire quand on aura la réponse
 xhr.onreadystatechange = function() {
  // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
  if(xhr.readyState == 4 && xhr.status == 200) {
   var rep = xhr.responseText;
   //alert(rep); //activer pour le test 
  }
 }
 xhr.open("GET","page2.php?cin="+cin+"&type="+type+"&val="+val,true);
 xhr.send(null);

 	function getXhr() {
 		var xhr = null; 
 		if(window.XMLHttpRequest) {// Firefox et autres
 		 xhr = new XMLHttpRequest(); }
 		else if(window.ActiveXObject) { // Internet Explorer 
 		 	try {
 		 	 xhr = new ActiveXObject("Msxml2.XMLHTTP");
 		 	} catch (e) {
 			  xhr = new ActiveXObject("Microsoft.XMLHTTP");
 		 	}
 		} else { // XMLHttpRequest non supporté par le navigateur 
 		 	alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
 		 	xhr = false; 
 		} 
 		return xhr;
	}
}
function goo(idprof,idformation,id) {
	var val=null;
	if ($(id).is(":checked")) {  val=1;
	} else {  val=0;}
 var xhr = getXhr();
 // On défini ce qu'on va faire quand on aura la réponse
 xhr.onreadystatechange = function() {
  // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
  if(xhr.readyState == 4 && xhr.status == 200) {
   var rep = xhr.responseText;
   //alert(rep); //activer pour le test 
  }
 }
 xhr.open("GET","page3.php?idprof="+idprof+"&idformation="+idformation+"&val="+val,true);
 xhr.send(null);

 	function getXhr() {
 		var xhr = null; 
 		if(window.XMLHttpRequest) {// Firefox et autres
 		 xhr = new XMLHttpRequest(); }
 		else if(window.ActiveXObject) { // Internet Explorer 
 		 	try {
 		 	 xhr = new ActiveXObject("Msxml2.XMLHTTP");
 		 	} catch (e) {
 			  xhr = new ActiveXObject("Microsoft.XMLHTTP");
 		 	}
 		} else { // XMLHttpRequest non supporté par le navigateur 
 		 	alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
 		 	xhr = false; 
 		} 
 		return xhr;
	}
}

function validation(cin) {
  var val=null;
  var xhr = getXhr();
 // On défini ce qu'on va faire quand on aura la réponse
 xhr.onreadystatechange = function() {
  // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
  if(xhr.readyState == 4 && xhr.status == 200) {
   var rep = xhr.responseText;
   //alert(rep); //activer pour le test 
  }
 }
 xhr.open("GET","pagevalidation.php?cin="+cin,true);
 xhr.send(null);

  function getXhr() {
    var xhr = null; 
    if(window.XMLHttpRequest) {// Firefox et autres
     xhr = new XMLHttpRequest(); }
    else if(window.ActiveXObject) { // Internet Explorer 
      try {
       xhr = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
      }
    } else { // XMLHttpRequest non supporté par le navigateur 
      alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
      xhr = false; 
    } 
    return xhr;
  }
}
