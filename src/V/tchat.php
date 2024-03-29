<?php

    require('header.php');
    $getUser = get_user($mail);

    $_SESSION['user'] = $getUser['mail'];
?>

        <br/>
        <div class="header">
            <h2><?php echo $getUser['login']; ?></h2>
            <h6 class="time"></h6>
        </div>


        <!-- <br/>
         -->
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
recupTime();

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

    if (message != ''){
            $.post('ajax/send.php',{message:message},function(){
             console.log("message envoyer en bdd");
         recupMessage();
            $('#message').val('');
        });
    }
});

function recupMessage() {
    $.post('ajax/recover.php', function(data) {
        $('.messages-box').html(data);
    });
}

function recupTime () {
    $.post('ajax/time.php', function(data) {
        $('.time').html(data);
    });
}
setInterval(recupTime,1000);
setInterval(recupMessage,1000);

});
</script>



<style>
*{
    box-sizing:border-box;
}

/* @font-face {
    font-family: 'app';
    src: url('font/app.eot?23297456');
    src: url('font/app.eot?23297456#iefix') format('embedded-opentype'),
    url('font/app.woff?23297456') format('woff'),
    url('font/app.ttf?23297456') format('truetype'),
    url('font/app.svg?23297456#app') format('svg');
    font-weight: normal;
    font-style: normal;
} */

[class^="i-"]:before, [class*=" i-"]:before {
    font-family: "app";
    font-style: normal;
    font-weight: normal;
    display: inline-block;
    text-decoration: inherit;
    width: 1em;
    margin-right: .2em;
    text-align: center;font-variant: normal;
    text-transform: none;line-height: 1em;
    margin-left: .2em;
    font-size: 125%;
}

.i-user:before { content: '\e801'; } /* '' */
.i-send:before { content: '\e802'; } /* '' */


body{
    font-family: Roboto;
    margin: 0;
    padding: 0;
}

.container{
    width:100%;
    position:relative;
    top:60px;
    padding: 5px 2%;
}

.topbar{
    background-color: #34495e;
    height:60px;
    width:100%;
    line-height: 60px;
    padding:0 2%;
    position:fixed;
    top:0px;
    color: #FFF;
}

.topbar .app-name{
    color:inherit;
    text-decoration:none;
    font-size:21px;
    font-weight:500;
}

.topbar .menu{
    position:absolute;
    right:10px;
}

.topbar .menu a{
    color:inherit;
    text-decoration:none;
    float:left;
    padding:0 15px;
}

.topbar .menu a:hover{
    background-color: #2c3e50;
}

.topbar .menu a.active{
    background-color: #2c3e50;
}

.field{
    position: relative;
    height: 72px;
    padding: 16px 0 8px 0;
}

.field-label{
    position: relative;
    margin: 0;
    display: block;

    color:  #bfbfbf;
    line-height: 16px;
    font-size: 16px;
    font-weight: 400;

    transform: translateY(24px);
    transition: transform 0.3s, color 0.3s;
    transform-origin: 0 50%;
}

.field-input{
    position: relative;
    display: block;
    width: 100%;
    height: 32px;
    padding: 8px 0;

    line-height: 16px;
    font-family: Roboto;
    font-size: 16px;

    background: transparent;
    border: none;
    -webkit-appearance: none;
    outline: none;
}

.field-area{
    heaight:auto;
    padding-top:5px;
    width:90%;
}

.field::after, .field::before{
    content:'';
    height: 2px;
    width: 100%;
    position: absolute;
    bottom: 6px;
    left: 0;

    background-color: #e6e6e6;
}

.field::after{
    background-color: #2195F2;
    transform: scaleX(0);
    transition: transform 0.3s;
}

.has-label .field-label{
    transform: translateY(0) scale(0.75);
}

.is-focused .field-label{
    color: #2195F2;
}
.field.is-focused::after{
    transform: scaleX(1);
}

.field.error .field-label{
    color: #e74c3c;
}

.field.error::after{
    background-color: #e74c3c;
}

button{
    background-color:#34495e;
    border:2px solid #34495e;
    display:block;
    width:100%;
    height:36px;
    color:#fff;
    border-radius:2px;
    cursor:pointer;
    font-size:16px;
    margin:5px 0;
    outline:none;
}

button:hover{
    background:none;
    color:#34495e;
}

.header{
    display: block;
    border-bottom: 2px solid #000;
}

.header.header-form{
    margin-bottom:-8px;
}

p.error{
    color: #e74c3c;
}

.membre{
    display:block;
    background-color:#ccc;
    padding:10px 10px;
    margin-bottom:10px;
    box-shadow:1px 2px 5px 1px rgba(0, 0, 0, 0.4);
    position:relative;
    border-radius:2px;
}

.membre .select{
    position:absolute;
    right: 10px;
    top: 9px;
    background-color:#3498db;
    color:#fff;
    display:block;
    width:40px;
    height:40px;
    border-radius:50%;
    text-align:center;
    line-height:40px;
}

.membre .select:hover{
    background-color:#2980b9;
}

/* .bottom{
    position:fixed;
    background-color:#fff;
    bottom:0px;
    width:96%;
} */

.bottom{

    position: fixed;
    width: 100%;
    bottom: 0px;
    background-color:#fff;
    width:100%;
}

.bottom .send{
    background-color:#34495E;
    color:#fff;
    position:absolute;
    right:0px;
    top:25px;
    width:38px;
    border-radius:50%;
    padding:0;
    font-size:12px;
    outline:none;
}

.bottom .send:hover{
    background-color: #2C3E50;

}

.maessages-box{
    position:relative;
    background-color:#fff;
    margin-bottom:95px;
}

.messages-box .message{
    padding: 3px 8px;
    margin:3px 0;
    border-radius:12px;
    max-width:75%;
    display:inline-block;
    min-height:25px;
}

.messages-box .message.message-membre{
    background-color:#3498db;
    float:right;
}

.messages-box .message.message-user{
    background-color:#bdc3c7;
}

</style>