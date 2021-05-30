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
                        <li class="nav-item">
                            <a class="nav-link" href="../connexion/formulaire.php">Connexion</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="formulaire.php">Inscription</a>
                            <span class="sr-only">(current)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <br><br><br><br>

    <form class="form-compact" action="inscription.php" method="post">
        <div class="row paddingBottom20">
            <div class="container col-4">
                <div class="row">
                    <h3 class="text-center col-12 mb-0">Saisie de vos informations:</h3>
                    <sub class="text-right text-muted col-12"><a href="#" tabindex="-1"><i
                                class="far fa-edit"></i></a></sub>
                </div>
                <div class="dropdown-divider mb-3"></div>
                <div class="form-group row">
                    <label for="firstName" class="col-4 col-form-label-sm text-right">Prenom:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="firstName" name="prenom" type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="lastName" class="col-4 col-form-label-sm text-right">Nom:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="lastName" name="nom" type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="emailAddress" class="col-4 col-form-label-sm text-right">Adresse Email:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="emailAddress" name="mail" type="email"
                                class="form-control form-control-sm extendable">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="lastName" class="col-4 col-form-label-sm text-right">Pseudo:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="lastName" name="pseudo" type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="lastName" class="col-4 col-form-label-sm text-right">Date de naissance:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="lastName" name="dateN" type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="lastName" class="col-4 col-form-label-sm text-right">Telephone:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="lastName" name="tel" type="text" class="form-control form-control-sm"
                                pattern="[0-9]{10}">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="lastName" class="col-4 col-form-label-sm text-right">Mot de passe:</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="lastName" name="mdp" type="password" class="form-control form-control-sm">

                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="lastName" class="col-4 col-form-label-sm text-right"></label>
                    <div class="col-8">
                        <div class="input-group">
                            <p class="col-form-label-sm ">le mot de passe doit faire au moins 8
                                caractères et doit contenir au moins une majuscule, une minuscule et un caractère
                                spécial</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="emailAddress" class="col-4 col-form-label-sm text-right"></label>
                    <div class="col-8">
                        <div class="input-group">
                            <input type="submit" value="s'inscrire">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label for="emailAddress" class="col-4 col-form-label-sm text-right"></label>
                    <div class="col-8">
                        <div class="input-group">
                            <p>Déja un compte? <a href="../connexion/formulaire.php"> se connecter</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>