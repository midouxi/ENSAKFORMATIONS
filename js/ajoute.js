$(document).ready(function () {
    $('div#output').hide();
    //bind send message here
    $('#send-message').click(sendMessage);
    $('button.close').live('click', function () {
        $(this).parent().find('p').html('');
        $(this).parent().hide();
    });
});

function checkEmail(email) {
    var check = /^[\w\.\+-]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]{2,6}$/;
    if (!check.test(email)) {
        return false;
    }
    return true;
}
