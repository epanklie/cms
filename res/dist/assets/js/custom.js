$(document).ready(function() {
    $('#form-register').hide();
    $('#title-register-error').hide();
    $('#id-register').click(function() {
        $('#form-login').hide(1000);
        $('#form-register').show(1500);
    });
    $('#id-login').click(function() {
        $('#form-register').hide(1000);
        $('#form-login').show(1500);
    });
    $('#form-register-submit').on('submit', function() {
    	var pass = $('#pass').val();
	    var conf_pass = $('#conf_pass').val();
	    if (conf_pass != pass) {
	    	$('#title-register-error').show();
	    	return false;
	    }
    });
    $('.session_fade').fadeOut(5000);
});