<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Processo Seletivo | Login</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.login.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery.min.login.js"></script>
        <script src="js/bootstrap.min.login.js"></script> 
        <link href="css/estilo_login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="login-form">
            <h2 class="text-center">Secretaria de Saúde</h2>
            <form action="/examples/actions/confirmation.php" method="post">
                <div class="avatar">
                    <img src="img/avatar.png" alt="Avatar">
                </div>           
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
                </div>        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Sign in</button>
                </div>
                <p class="hint-text">Don't have an account? <a href="#">Sign up here</a></p>
            </form>
            <div class="form-footer"><a href="#">Forgot Your Password?</a></div>
        </div>
    </body>
</html>                            