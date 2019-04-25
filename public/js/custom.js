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

        e.preventDefault();
        $.ajax({

            type: "POST",
            url: '/enquiry-form',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {

                if (data.errors) {
                    if (data.errors.hasOwnProperty('email')){

                        $('input[name="email"]').addClass('error-border');

                    }
                    if (data.errors.hasOwnProperty('phone')){
                        $('input[name="phone"]').addClass('error-border');

                    }
                    if (data.errors.hasOwnProperty('name')){
                        $('input[name="name"]').addClass('error-border');
                    }

                }else {

                    $('#success').css('display','block');
                    $("input[type=text],input[type=email],input[type=phone], textarea,select").val("");
                }

            },
            error: function (data) {

            }


        })
    });


//

    $('#closeIcon').click(function(){
        $('#success').css('display','none');
        $('input[name="name"]').removeClass('error-border');
        $('input[name="phone"]').removeClass('error-border');
        $('input[name="email"]').removeClass('error-border');

    })

});
// When the user clicks anywhere outside of the modal, close it


// $('.EnquiryShow').click(function(){
//     if($('section.Enquiry2019').css('right')=='0px'){
//         $('section.Enquiry2019').css('right','-400px');
//
//     } else {
//         $('section.Enquiry2019').css('right','0px');
//     }
//
//
// });
//
// $('.whatsappButton').click(function(){
//     if($('.whatsappCall').css('right')=='-115px'){
//         $('.whatsappCall').css('right','0px');
//
//     }
//     else {
//         $('.whatsappCall').css('right','-115px');
//     }
// });
// $('.callingButton').click(function(){
//     if($('.callingCall').css('right')=='-115px'){
//         $('.callingCall').css('right','0px');
//
//     }
//     else {
//         $('.callingCall').css('right','-115px');
//     }
// });
