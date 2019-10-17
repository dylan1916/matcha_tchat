<?php

    require('header.php');
    $getUser = get_user($mail);

    $_SESSION['user'] = $getUser['mail'];
?>

        <h2 class="header">
            <?php echo $getUser['login']; ?>
        </h2>

        <div class="messages-box"></div>

        <div class="bottom">
            <div class="field field-area">
                <label for="message" class="field-label">Votre message</label>
                <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
            </div>
            <button type="submit" id="send" class="send">
                <span class="i-send"></span>
            </button>

        </div>



<!-- <script src="js/tchat.func.js"></script>  -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<script>

$(document).ready(function() {

recupMessage();

$('.field-input').focus(function () {
    $(this).parent().addClass('is-focused has-label');
});

// à la perte du focus
$('.field-input').blur(function () {
    $parent = $(this).parent();
    if ($(this).val() == '') {
        $parent.removeClass('has-label');
    }
    $parent.removeClass('is-focused');
});

// si un champs est rempli on rajoute directement la class has-label
$('.field-input').each(function () {
    if ($(this).val() != '') {
        $(this).parent().addClass('has-label');
    }
});

$('#send').click(function(){
    var message = $('#message').val();
    console.log("click btn send fonctionne");
    // if(message != ''){

    //     // $.post('ajax/post.php',function(){
    //         // console.log("okokoko");
    //         // recupMessage();
    //         $('#message').val('');
    //     });
    // }

    if (message != ''){
            $.post('ajax/send.php',{message:message},function(){
             console.log("message envoyer en bdd");
         recupMessage();
            $('#message').val('');
        });
    }
});

// function recupMessage(){
//     $.post('ajax/recup.php',function(data){
//         $('.messages-box').html(data);

//     });
// }

function recupMessage() {
    $.post('ajax/recover.php', function(data) {
        $('.messages-box').html(data);
    });
}

setInterval(recupMessage,1000);
// console.log("ok");

});
</script>
