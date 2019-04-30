function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginRight = "250px";
    document.querySelector('.navbar-barIcon').style ='display:none';

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginRight= "0";
    document.querySelector('.navbar-barIcon').style ='display:block';

}
// var modal = document.getElementById('myModal');
//
// // Get the button that opens the modal
// var btn = document.getElementById("modalBtn");
//
// // Get the <span> element that closes the modal
// var span = document.getElementById("closeIcon");
//
// // When the user clicks the button, open the modal
// btn.onclick = function() {
//     modal.style.display = "block";
// }
//
// // When the user clicks on <span> (x), close the modal
// span.addEventListener('click', function() {
//         modal.style.display = "none";
//     }
// );

$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function () {

        $(this).addClass('transition');
    }, function () {

        $(this).removeClass('transition');
    });

    $('#enquiry-form').on('submit', function (e) {

        $.ajax({

            type: "POST",
            url: '/enquiry-form',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {

                if (data.errors) {
                    if (data.errors.hasOwnProperty('email')){

                        $('input[id="a-email"]').addClass('error-border');

                    }
                    if (data.errors.hasOwnProperty('phone')){
                        $('input[id="a-phone"]').addClass('error-border');

                    }
                    if (data.errors.hasOwnProperty('name')){
                        $('input[id="a-name"]').addClass('error-border');
                    }

                }else {

                    $('#success').css('display','block');
                    $("input[type=text],input[type=email],input[type=phone], textarea,select").val("");
                }

            },
            error: function (data) {

            }


        });


        $('#f_name').on('input', function() {
            var input=$(this);
            var is_name=input.val();
            if(is_name){input.removeClass("error-border").addClass("valid");}
            else{input.removeClass("valid").addClass("error-border");}
        });


        $('#f_email').on('input', function() {
            var input=$(this);
            var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var is_email=re.test(input.val());
            if(is_email){input.removeClass("error-border").addClass("valid");}
            else{input.removeClass("valid").addClass("error-border");}
        });





        $('#f_message').keyup(function(event) {
            var input=$(this);
            var message=$(this).val();
            console.log(message);
            if(message){input.removeClass("error-border").addClass("valid");}
            else{input.removeClass("valid").addClass("error-border");}
        });


        $("#f_submit button").click(function(event){
            var form_data=$("#feedback-form").serializeArray();
            var error_free=true;
            for (var input in form_data){
                var element=$("#contact_"+form_data[input]['name']);
                var valid=element.hasClass("valid");
                var error_element=$("span", element.parent());
                if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
                else{error_element.removeClass("error_show").addClass("error");}
            }
            if (!error_free){
                event.preventDefault();
            }
            else{
                // alert('No errors: Form will be submitted');
            }
        });

    });








    // $('#feedback-form').on('submit', function (e) {
    //
    //
    //
    //     e.preventDefault();
    //     $.ajax({
    //
    //         type: "POST",
    //         url: '/feedback-form',
    //         data: $(this).serialize(),
    //         dataType: 'json',
    //         success: function (data) {
    //
    //
    //             if (data.errors) {
    //                 if (data.errors.hasOwnProperty('email')){
    //
    //                     $('input[id="a-email"]').addClass('error-border');
    //
    //                 }
    //
    //                 if (data.errors.hasOwnProperty('phone')){
    //                     $('input[id="a-phone"]').addClass('error-border');
    //
    //                 } else {
    //                     $('input[id="a-phone"]').removeClass('error-border');
    //                 }
    //                 if (data.errors.hasOwnProperty('name')){
    //                     $('input[id="a-name"]').addClass('error-border');
    //                 } else {
    //                     $('input[id="a-name"]').removeClass('error-border');
    //                 }
    //
    //             }else {
    //
    //                 $('#success').css('display','block');
    //                 $("input[type=text],input[type=email],input[type=phone], textarea,select").val("");
    //             }
    //
    //         },
    //         error: function (data) {
    //
    //         }
    //
    //
    //     })
    // });



//

    $('#closeIcon').click(function(){
        $('#success').css('display','none');
        $('input[name="name"]').removeClass('error-border');
        $('input[name="phone"]').removeClass('error-border');
        $('input[name="email"]').removeClass('error-border');

    })

});
// When the user clicks anywhere outside of the modal, close it

$('.EnquiryShow').click(function(){
    if($('section.Enquiry2019').css('right')=='0px'){

        $('section.Enquiry2019').css('right','-405px');


    } else {
        $('section.Enquiry2019').css('right','0px');

    }


});

$('.whatsappButton').click(function(){
    if($('.inCall').css('right')=='-135px'){


        $('.inCall').css('right','0px');


    }
    else {
        $('.inCall').css('right','-135px');

    }
});
$('.callingButton').click(function(){
    if($('.inCall2').css('right')=='-135px'){
        $('.inCall2').css('right', '0');

    }
    else {
        $('.inCall2').css('right','-135px');

    }
});