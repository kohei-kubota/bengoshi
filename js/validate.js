$(function(){
    $('#submit').on('click',function(){
        if($('.item-name').val() == '') {
            $('.item-name').css('background','#f89484');
        } else {
            $('.item-name').css('background','#e4e4e4');
        }

        if($('.item-tel').val() == '') {
            $('.item-tel').css('background','#f89484');
        } else {
            $('.item-tel').css('background','#e4e4e4');
        }

        if($('.item-email').val() == '') {
            $('.item-email').css('background','#f89484');
        } else {
            $('.item-email').css('background','#e4e4e4');
        }


        var device = $('.privacy:checked').val();
        if(!device){
            $('.statement').text('(必須項目です)');
            return false;
        } else {
            $('.statement').text('');
        }

        if($('.item-name').val() != '' && $('.item-tel').val() != '' && $('.item-email').val() != '') {
            $('#form-post').submit();
        }
    });
});
