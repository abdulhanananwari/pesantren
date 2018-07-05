$('form').submit(function(){
    $('input[type=submit]', this).attr('disabled', true);
    $('input[type=submit]', this).val('Submiting ...');
});