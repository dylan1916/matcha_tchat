// jQuery(document).ready(function() {
//     // recupMessage();

//     $('.field-input').focus(function () {
//         $(this).parent().addClass('is-focused has-label');
//     });

//     // à la perte du focus
//     $('.field-input').blur(function () {
//         $parent = $(this).parent();
//         if ($(this).val() == '') {
//             $parent.removeClass('has-label');
//         }
//         $parent.removeClass('is-focused');
//     });

//     // si un champs est rempli on rajoute directement la class has-label
//     $('.field-input').each(function () {
//         if ($(this).val() != '') {
//             $(this).parent().addClass('has-label');
//         }
//     });

//     jQuery('#send').click(function(){
//         var message = $('#message').val();
//         if(message != ''){
//             console.log("--------------_>");
            

//             jQuery.ajax({
//                 type: "POST",
//                 url: "ajax/sendmessage.php" ,
//             });


//             // $.post("ajax/sendmessage.php", {message: message}, function(){
//             //     console.log("$$$$$$$$$$$$$$$$$$$$$$$$$");
//             //     // recupMessage();
//             //     $('#message').val(''); //supprimer le message
//             //   });

// //         }
// //     });

// //     // function recupMessage(){
// //     //     $.post('ajax/recup.php',function(data){
// //     //         $('.messages-box').html(data);

// //     //     });
// //     // }

// //     // setInterval(recupMessage,1000);


// // });

// $(document).ready(function() {

//     // recupMessage();

//     $('.field-input').focus(function () {
//         $(this).parent().addClass('is-focused has-label');
//     });

//     // à la perte du focus
//     $('.field-input').blur(function () {
//         $parent = $(this).parent();
//         if ($(this).val() == '') {
//             $parent.removeClass('has-label');
//         }
//         $parent.removeClass('is-focused');
//     });

//     // si un champs est rempli on rajoute directement la class has-label
//     $('.field-input').each(function () {
//         if ($(this).val() != '') {
//             $(this).parent().addClass('has-label');
//         }
//     });

//     $('#send').click(function(){
//         var message = $('#message').val();
//         console.log("ok");
//         if(message != ''){

//             $.post('ajax/post.php',function(){
//                 // console.log("okokoko");
//                 // recupMessage();
//                 $('#message').val('');
//             });
//         }
//     });

    // function recupMessage(){
    //     $.post('ajax/recup.php',function(data){
    //         $('.messages-box').html(data);

    //     });
    // }

    // setInterval(recupMessage,1000);
    // console.log("ok");

// });