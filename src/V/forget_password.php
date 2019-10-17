<?php
    require('header.php');
?>
 
<br/><br/><br/><br/>
<center>
            <br/>
            <h3 id="emble">Forgot your password ?</h3>
                <br/>
            <h5 id="slogan">Enter your e-mail address and we will <br/>will send a link to recover your account.</h5>
                <br/><br/><br/><br/>
            <form method="post" action="index.php?controle=connect&action=forget">
                <div class="form-group">
                    <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your e-mail address" required>
                </div>
                <br/><br/><br/>
                <button type="submit" value="submit" class="btn btn-primary" style="  background-color:#E9467C;color:white; border-color:white; border-radius:10px;width:27%;">Send a password recovery link</button>
            </form>
</center>

 <?php
    require('footer.php');
?>