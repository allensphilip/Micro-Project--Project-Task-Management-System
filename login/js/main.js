
(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    // function showValidate(input) {
    //     var thisAlert = $(input).parent();

    //     $(thisAlert).addClass('alert-validate');
    // }

    // function hideValidate(input) {
    //     var thisAlert = $(input).parent();

    //     $(thisAlert).removeClass('alert-validate');
    // }

    
    // function passval(){
    //     $('#password').on('keyup', function () {
    //         if (/[A-Z]/.test($('#password').val()) == true) {
    //         $('#capital').html('Uppercase</br>').css('color', 'green');
    //         } else
    //         $('#capital').html('Atleast one uppercase</br>').css('color', 'red');
    //     });

    //     $('#password').on('keyup', function () {
    //         if (/[a-z]/.test($('#password').val()) == true) {
    //         $('#letter').html('lowercase</br>').css('color', 'green');
    //         } else
    //         $('#letter').html('Atleast one lowercase</br>').css('color', 'red');
    //     });

    //     $('#password').on('keyup', function () {
    //         if (/[0-9]/.test($('#password').val()) == true) {
    //         $('#number').html('Number</br>').css('color', 'green');
    //         } else
    //         $('#number').html('Atleast one Number</br>').css('color', 'red');
    //     });

    //     $('#password').on('keyup', function () {
    //         if ($('#password').val().length >=8) {
    //         $('#length').html('Minimum 8 letters</br>').css('color', 'green');
    //         } else
    //         $('#length').html('Minimum 8 letters</br>').css('color', 'red');
    //     });

    // }
        
    


    $('#password, #confirm_password').on('keyup', function () {
        // passval();
        if ($('#password').val() == $('#confirm_password').val()) {
          $('#message').html('Matching').css('color', 'green');
        } else{
            $('#message').html('Not Matching').css('color', 'red');
        }
         
    });
      
    
    

})(jQuery);