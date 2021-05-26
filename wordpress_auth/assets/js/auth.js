// alert('تست');
jQuery(document).ready(function ($) {
    $('#loginform').on('submit', function (event) {
        event.preventDefault();
        let user_email = $('#userEmail').val();
        let user_password = $('#userPassword').val();
        let notify = $('.alert');
        $.ajax({
            url:'/wp-admin/admin-ajax.php',
            type:'POST',
            dataType:'json',
            data: {
                action: 'wp_auth_login',
                user_Email: user_email ,
                user_Password: user_password ,
            },
            success: function(response){
                if(response.success){
                    window.location.href='/';

                }
            },
            error: function(error){
                if(error){
                let message=error.responseJSON['message'];
           //     console.log(error.responseJSON);
                notify.addClass('alert-error');
                notify.append(message);
                notify.css('display','block');
                notify.delay(3000).hide(50);
              //  input.css('border','2px solid rgb(240, 41, 41)');
            }
            }
        });
    })

    $('#registerform').on('submit', function (event) {
        event.preventDefault();
        let  user_firstname= $('#FirstNameUser').val();
        let  user_lastname= $('#LastNameUser').val();
        let user_email = $('#EmailUser').val();
        let user_password = $('#PasswordUser').val();
        let notify = $('.alert');
        $.ajax({
            url:'/wp-admin/admin-ajax.php',
            type:'POST',
            dataType:'json',
            data: {
                action: 'wp_auth_register',
                user_Firstname: user_firstname ,
                user_Lastname: user_lastname ,
                user_Email: user_email ,
                user_Password: user_password ,

            },
            success: function(response){
                if(response.success){
                    notify.removeClass('alert-error').addClass('alert-success');
                    notify.html(response.message);
                    notify.show(300);
                    setTimeout(function () {
                     window.location.href='/loginخ';
                    },2000)
                }
            },
            error: function(error){
                if(error){
             //       console.log(error.responseJSON);
                    let message=error.responseJSON['message'];
                    notify.addClass('alert-error');
                    notify.append(message);
                    notify.css('display','block');
                    notify.delay(3000).hide(50);
                }         
           }
        });
    })

});