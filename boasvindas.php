<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Teste</title>

    <link rel="stylesheet" type="text/css" href="static/css/Semantic-UI-CSS-master/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <link rel="stylesheet" type="text/css" href="static/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <script src="static/alertifyjs/alertify.min.js"></script>
    <script src="static/alertifyjs/css/alertify.min.css"></script>
    <script src="static/alertifyjs/css/themes/default.min.css"></script>

    <script type="text/javascript" src="static/scripts/jquery.js"></script>
    <script src="static/bootstrap-5.2.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="static/css/Semantic-UI-CSS-master/semantic.min.js"></script>

    <style>
        .boasvindas {
            color: white;
        }
    </style>

</head>

<body>
    <div class="ui secondary  menu">
        <a class="active item" style="color: white; font-weight: bold;" href="index.php">
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
    <div class="container-md col-5 mx-auto" id="container">
        <h2 class="ui header">
            <p class="boasvindas">
                <?php
                if (isset($_POST['user']))
                    $user = $_POST['user'];
                echo 'Seja muito bem-vindo, ' . strtoupper($user);
                ?> 🎉
            </p>
        </h2>

        <div class="modal fade" id="boasvindas-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Boas-vindas!</h5>
                    </div>
                    <div class="modal-body">
                        <p>Em breve teremos novas novidades, site em desenvolvimento.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="button-close">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#boasvindas-modal').modal('show');
                $('#button-close').on('click', function() {
                    $('#boasvindas-modal').modal('hide');
                })
            })
        </script>
</body>

</html>