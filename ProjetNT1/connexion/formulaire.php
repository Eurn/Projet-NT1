<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.php">Musées de Paris</a></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Accueil
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="formulaire.php">Connexion</a>
                            <span class="sr-only">(current)</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../inscription/formulaire.php">Inscription</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <br><br><br><br>


    <form class="form-compact" action="connexion.php" method="post">
        <div class="row paddingBottom20">
            <div class="container col-4">
                <div class="row">
                    <h3 class="text-center col-12 mb-0">Saisie de vos informations:</h3>
                    <sub class="text-right text-muted col-12"><a href="#" tabindex="-1"><i
                                class="far fa-edit"></i></a></sub>
                </div>
                <div class="dropdown-divider mb-3"></div>
                <div class="form-group row align-items-center">
                    <label for="emailAddress" class="col-4 col-form-label-sm text-right">Adresse Email:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="emailAddress" name="mail" type="mail"
                                class="form-control form-control-sm extendable">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="password" class="col-4 col-form-label-sm text-right">Mot de passe:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="password" name="mdp" type="password"
                                class="form-control form-control-sm extendable">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="emailAddress" class="col-4 col-form-label-sm text-right"></label>
                    <div class="col-8">
                        <div class="input-group">
                            <input type="submit" value="se connecter">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="emailAddress" class="col-4 col-form-label-sm text-right"></label>
                    <div class="col-8">
                        <div class="input-group">
                            <p>Pas de compte? <a href="../inscription/formulaire.php"> s'inscrire</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>

</html>