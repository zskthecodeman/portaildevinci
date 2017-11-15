<?php include 'template/header.php' ?>
    <div class="row">
        <div class="col-md-12 background">

            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="container-fluid">
                            <div class="logodiv">
                                <img src="img/logo.png">
                            </div>
                            <h3 class="bgtitle">Tableau de bord Étudiant</h3>
                        </div>

                        <br>

                        <nav class="lgscreen">
                            <ul class="navbar-nav mr-auto align">
                                <li class="nav-item">
                                    <a href="index.php" class="btn btn-effect">Fiche Étudiant</a>
                                </li>
                                <li class="nav-item align-baseline">
                                    <a href="#" class="btn btn-effect">Mon E.D.T</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">Mes Absences</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">Mes Notes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">Mes Cours</a>
                                </li>
                                <li class="nav-item">
                                    <a href="document.php" class="btn btn-effect">Documents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">Stages</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">International</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">Rendus pédagogique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">Finances</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect">Promotion école</a>
                                </li>
                            </ul>
                        </nav>

                        <div id="myNav" class="overlay smscreen">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="#">Fiche Étudiant</a>
                                <a href="#">Mon E.D.T</a>
                                <a href="#">Mes Absences</a>
                                <a href="#">Mes Notes</a>
                                <a href="#">Mes Cours</a>
                                <a href="#">Documents</a>
                                <a href="#">Stages</a>
                                <a href="#">International</a>
                                <a href="#">Rendus pédagogique</a>
                                <a href="#">Finances</a>
                                <a href="#">Promotion école</a>
                            </div>
                        </div>
                        <span class="smscreen btnsmscreen" onclick="openNav()">&#9776; MENU</span>

                        <script>
                            function openNav() {
                                document.getElementById("myNav").style.width = "100%";
                            }

                            function closeNav() {
                                document.getElementById("myNav").style.width = "0%";
                            }
                        </script>

                    </div>

                    <div class="container-fluid" style="z-index: 100;">
                        <div class="content">

                            <header><h4>Fiche Étudiant : </h4></header>

                            <div class="body">
                                <div class="row-fluid">
                                    <div class="alert alert-info">
                                        <div class="pull-right">
                                            Téléchargement de la fiche de réinscription :
                                            <a href="#"><img src="img/fichier.png"></a>
                                            <br>
                                            Mandat SEPA :
                                            <a href="#"><img src="img/fichier.png"></a>
                                        </div>    
                                            <h4>Réinscriptions 2017-2018</h4>
                                            Votre inscription est validée.
                                            <br>
                                            <strong>&Agrave; titre indicatif :</strong>
                                            Le montant de votre inscription pour l'année universitaire
                                            <b>2017-2018</b>
                                            sera de
                                            <span class="label">7 100€</span>
                                            <br>
                                            Votre certificat
                                            <b>ImaginR</b>
                                            est disponible dans l'onglet
                                            <b>Document</b>
                                            ci-dessus.
                                    </div>
                                </div>
                                <div class="row-fluid">

                                </div>
                                <div class="row-fluid">

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
<?php include 'template/footer.php'; ?>