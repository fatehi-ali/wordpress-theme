// alert('تست');
jQuery(document).ready(function ($) {
    $('#sendajaxrequest').on('click', function (event) {
        $.ajax({

            url:'/wp-admin/admin-ajax.php',
            type:'POST',
            dataType:'json',
            data: {
                action: 'calculate_operation',
                num1: 10 ,
                num2: 20 ,

            },
            success: function(response){
                console.log(response.result);
            },
            error: function(error){
                alert(100);
            }
        });
    })
});