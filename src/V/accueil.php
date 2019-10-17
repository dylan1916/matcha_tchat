<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/58de5814e5.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Secular+One|Work+Sans:700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="V/css/homepage.css">
    <link type="text/css" rel="stylesheet" href="V/css/footer.css">
    <title>Matcha</title>
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="#" class="navbar-brand" style="color:#E9467C; font-size: 36px; font-family: 'Secular One', sans-serif; text-decoration: none;"><img src="https://img.icons8.com/color/39/000000/--tinder.png" class="d-inline-block align-top">Matcha</a>
        </div>

        <div class="col" style="text-align:right;">
            <a href="#"  data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary active" role="button" aria-pressed="true" style="background-color:white; color:#E9467C; margin-top: 1%;">CONNEXION</a>
        </div>      
    </div>
    <center>
        <br/>
        <h1 id="emble">Matchez. Discutez.<br/> Faites des <br/> rencontres.</h1>
            <br/>
        <h5 id="slogan">En cliquant sur inscription, vous accepter nos Conditions d'utilisation.</h5>
            <br/><br/><br/>
            <a href="#" data-toggle="modal" data-target="#exampleModalInscription" id="btn-account" class="btn btn-primary btn-lg" role="button" aria-pressed="true" style="background-color: rgba(233, 70, 124, 0.9); border-color:rgba(233, 70, 124, 0.9); border-radius: 20px; border-left-width: 13px; border-right-width: 13px;">INSCRIPTION</a>
    </center>
</div>
      

    <!-- POP UP CONNEXION -->
     <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="navbar-brand" style="color:#424242; font-size: 26px; font-family: 'Secular One', sans-serif; text-decoration: none; font-style: italic;"><img src="https://img.icons8.com/color/32/000000/--tinder.png" class="d-inline-block align-top">CONNEXION</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- FORMULAIRE CONNEXION -->
		            <form method="post" action="index.php?controle=connect&action=ident">
                    <div class="form-group">
                        <label for="email"><b>E-mail</b></label>
                        <input type="email" class="form-control" placeholder="Enter E-mail" aria-describedby="emailHelp" name="mail" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label></br>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required></br>
                    </div>
                    <center>
                        <a href="index.php?controle=connect&action=forget_psw" style="text-decoration:none;"><p style="font-style:bold;color:#E9467C;">Forget your password ?</p></a>
                    </center>
                    <div class="modal-footer">
                        <button type="submit" value="submit" class="btn btn-primary"  style="background-color:#E9467C; color:white; border-color:white; border-radius:10px;">Login</button>
                    </div>
                  </form>
              <!-- //////// -->
            </div> 
          </div>
        </div>
      </div>
    <!-- //////////////// -->


    <!-- POP UP INSCRIPTION -->
    <!-- Modal -->
     <div class="modal fade" id="exampleModalInscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="navbar-brand" style="color:#424242; font-size: 26px; font-family: 'Secular One', sans-serif; text-decoration: none; font-style: italic;"><img src="https://img.icons8.com/color/32/000000/--tinder.png" class="d-inline-block align-top">LET'S GO !</a>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- FORMULAIRE INSCRIPTION -->
		                <form method="post" action="index.php?controle=inscription&action=ident">
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input autocapitalize="words" class="form-control" type="text" name="login" placeholder="Login" required>
                          </div>
                        <div class="form-group">
                            <label for="name"><b>Name</b></label>
                            <input autocapitalize="words" class="form-control" type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name"><b>Last-name</b></label>
                            <input autocapitalize="words" type="text" class="form-control" name="last_name" placeholder="Last-Name" required>
                           </div>
                        <div class="form-group">
                            <label for="email"><b>E-mail </b></label>
                            <input type="email" class="form-control" aria-describedby="emailHelp"  name="mail" placeholder="Email" required>
                        </div>
                        <div class="form-group">

                               <label for="password"><b>Password </b><b style="font-style:italic" style="diplay:none">(Votre mot de passe doit contenir au moins 8 caractères et inclure un chiffre)</b></label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required> 
                        </div>
                        <div class="form-group">
                            <label for="validate"><b>Confirmation Password</b></label>
                            <input type="password"  class="form-control" name="validate" placeholder="Confirmation" required>
                        </div>
                        <div class="modal-footer">
				                    <button type="submit" class="registerbtn" id="btn-account" class="btn btn-primary" value="Register" style="background-color:#E9467C; color:white; border-color:white; border-radius:10px;">Register</button>
                        </div>
                      </form>
                  <!-- //////// -->
                </div> 
              </div>
            </div>
          </div>