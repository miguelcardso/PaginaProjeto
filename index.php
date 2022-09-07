<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="static/css/Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <link rel="stylesheet" type="text/css" href="static/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <script src="static/alertifyjs/alertify.min.js"></script>
    <script src="static/alertifyjs/css/alertify.min.css"></script>
    <script src="static/alertifyjs/css/themes/default.min.css"></script>

    <script type="text/javascript" src="static/scripts/jquery.js"></script>
    <script src="static/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="static/css/Semantic-UI-CSS-master/semantic.min.js"></script>




</head>

<body>
    <div class="ui secondary  menu">
        <a class="active item" style="color: white; font-weight: bold;">
            Home
        </a>
        <a class="item">
            ...
        </a>
        <a class="item">
            ...
        </a>
        <div class="right menu">
            <a class="ui item" style="color:white;">
                Logout
            </a>
        </div>
    </div>

    <img class="ui medium circular image" src="static/img/Sua_Logo.gif" id="logo">



    <label class="col-md-12 text-center title">
        <h3 class="h3">Login</h3>
    </label>

    <form method="POST" action="boasvindas.php">

        <div class="container-md col-5 mx-auto" id="container">

            <div class="ui stacked segment login-card ">
                <div class="content">
                    <div class="ui form">
                        <div class="fields row align-items-center">
                            <div class="field">
                                <label>Usuario</label>
                                <input type="text" placeholder="Nome de Usuario" style="border-top: None; border-right: None; border-left: None" id="user" name="user">
                            </div>
                        </div>
                        <div class="fields row align-items-center">
                            <div class="field" id="password">
                                <label>Senha</label>
                                <input type="password" placeholder="Senha" style="border-top: None; border-right: None; border-left: None" id="pass" name="senha">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="ui animated button" id="botton-login" tabindex="0" type="submit">
                    <div class="visible content">Enviar</div>
                    <div class="hidden content">
                        <i class="arrow up icon"></i>
                </button>
                <h5 class="ui header text-center " id="register">Não tem cadastro?
                    <a href="/index.html"">Cadastre-se</a>
            </h5>
            </div>
    </form>

   



    <script>
    
        $("#botton-login").on('click', function(e) { 
            question=window.confirm('Deseja prosseguir ?') 
            if (! question) { 
                e.preventDefault() 
                $("#user").val('') 
                $("#pass").val('') } 
                }) </script>
</body>

</html>