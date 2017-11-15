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


                        <nav class="lgscreen">
                            <ul class="navbar-nav mr-auto align">
                                <li class="nav-item">
                                    <a href="index.php" class="btn btn-effect"><i class="fa fa-user" aria-hidden="true"></i>
                                        Fiche Étudiant</a>
                                </li>
                                <li class="nav-item align-baseline">
                                    <a href="#" class="btn btn-effect"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        Mon E.D.T</a>
                                </li>
                                <li class="nav-item">
                                    <a href="absence.php" class="btn btn-effect"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        Mes Absences</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect"><i class="fa fa-list" aria-hidden="true"></i>
                                        Mes Cours</a>
                                </li>
                                <li class="nav-item">
                                    <a href="document.php" class="btn btn-effect"><i class="fa fa-file-o" aria-hidden="true"></i>
                                        Documents</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect"><i class="fa fa-coffee" aria-hidden="true"></i>

                                        Stages</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect"><i class="fa fa-plane" aria-hidden="true"></i>
                                        International</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect"><i class="fa fa-cloud-upload" aria-hidden="true"></i>

                                        Rendu pédagogique</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect"><i class="fa fa-money" aria-hidden="true"></i>
                                        Finances</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-effect"><i class="fa fa-info" aria-hidden="true"></i>
                                        Promotion école</a>
                                </li>
                            </ul>
                        </nav>

                        <div id="myNav" class="overlay smscreen">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                            <div class="overlay-content">
                                <a href="#">Fiche Étudiant</a>
                                <a href="#">Mon E.D.T</a>
                                <a href="absence.php">Mes Absences</a>
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
                                <div class="container-fluid">
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4 contour">
                                                    <ul>
                                                    <p class="black"><i class="fa fa-user black icon" aria-hidden="true"></i><strong> Identifiant</strong> kmbappe</p><br>
                                                    <p class="black"><i class="fa fa-user black icon" aria-hidden="true"></i><strong> Num. Badge</strong> 306729</p><br>
                                                    <p class="black"><i class="fa fa-user black icon" aria-hidden="true"></i><strong> ID Administratif</strong> <span class="label"> 48KMBAPPE</span></p>
                                                    </ul>
                                                </div>
                                                <div class="col-md-3 contour">
                                                    <ul class="perso">
                                                        <p class="black"><i class="fa fa-home" aria-hidden="true"></i> 104 avenue de la frite</p>
                                                        <p class="black">Croitre (15740) - France</p>
                                                        <p class="black"><i class="fa fa-phone" aria-hidden="true"></i> 0640495012</p>
                                                        <p class="black"><i class="fa fa-envelope-o" aria-hidden="true"></i> kmbappe@gmail.com</p><br>
                                                        <p class="black"><i class="fa fa-envelope" aria-hidden="true"></i> kmbappe@devinci.fr</p>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 contour profil"><img src="img/profil.jpg" width="100px"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="border: 1px solid red;">
                                        <h4>sdfsdf</h4>
                                    </div>
                                </div>
                                <div class="container-fluid">

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
<?php include 'template/footer.php'; ?>