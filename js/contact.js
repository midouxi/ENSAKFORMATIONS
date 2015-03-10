$(document).ready(function () {
    $('div#output').hide();
    //bind send message here
    $('#send-message').click(sendMessage);
    $('button.close').live('click', function () {
        $(this).parent().find('p').html('');
        $(this).parent().hide();
    });
});

/* Contact Form */
function checkEmail(email) {
    var check = /^[\w\.\+-]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]{2,6}$/;
    if (!check.test(email)) {
        return false;
    }
    return true;
}

function sendMessage() {
    
    // receive the provided data
    var name = $("input#nom").val();
    var prenom = $("input#prenom").val();
    var date = $("input#date_naissance").val();
    var cin = $("input#cin").val();
    var phone = $("input#tel").val();
    var email = $("input#email").val();
    var diplome = $("select#diplome").val();
    var ecole = $("input#etablissment").val();
    var formation = $("select#formation").val();
    var message = $("textarea#lettre_motivation").val();


    // check if all the fields are filled
   if (nom == ''|| prenom == ''|| date_naissance == '' || cin == ''|| email == '' || diplome == ''|| etablissment == ''  || formation == ''|| lettre_motivation == '') {
    $("div#output").show().html('<button type="button" class="close" data-dismiss="alert-close">x</button><p class="alert-close">Vous devez renseigner tous les champs obligatoires!</p>');

        return false;
   }


     if (tel == '') {
        $("div#output").show().html('<button type="button" class="close" data-dismiss="alert-close">x</button><p class="alert-close">Entrez un numero de téléphone valide</p>');

        return false;
    }


    // verify the email address
    if (!checkEmail(email)) {
        $("div#output").show().html('<button type="button" class="close" data-dismiss="alert">x</button><p>Entrez une adresse email valide </p>');
        return false;
    }
   
  

    // make the AJAX request
    var dataString = $('#cform').serialize();
    $.ajax({
        type: "POST",
        url: 'contact.php',
        data: dataString,
        dataType: 'json',
        success: function (data) {
            if (data.success == 0) {
                var errors = '<ul><li>';
                if (data.name_msg != '')
                    errors += data.name_msg + '</li>';
                if (data.email_msg != '')
                    errors += '<li>' + data.email_msg + '</li>';
                if (data.phone_msg != '')
                    errors += '<li>' + data.phone_msg + '</li>';
                if (data.lettre_motivation_msg != '')
                    errors += '<li>' + data.lettre_motivation_msg + '</li>';
              

                $("div#output").removeClass('alert-success').addClass('alert-error').show().html('<button type="button" class="close" data-dismiss="alert">x</button><p> Inscription impossible , essayez plus tard!! </p>' + errors);
            }
            else if (data.success == 1) {

                $("div#output").removeClass('alert-error').show().html(' <div class="ui-state-green ui-corner-all"><p>Ta Demande a bien été envoyée !!</p></div>');
            }

        },
        error: function (error) {
            $("div#output").removeClass('alert-success').addClass('alert-error').show().html('<button type="button" class="close" data-dismiss="alert">x</button><p> Could not complete your request. See the error below!</p>' + error.statusText);
        }
    });

    return false;
}