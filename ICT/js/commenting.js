    $(document).ready(function (){
      btn = document.querySelectorAll('input.otpravit');

    $(btn).on('click', function () {
        console.log('asd');
        console.log($(this).attr('id'));
        var idValue = $(this).attr('id');
        var userval = $(this).parent().children( 'input')[0].value;
        console.log(userval);
        var commentval = $(this).parent().children( 'input')[1].value;
        $.ajax({
            method: "POST",
            url: "./phpfunc/commrequest.php",
            data: { post_id : idValue , user : userval , comment : commentval}
        })
        .done(function() {
            console.log('done');
        });
        })

});
