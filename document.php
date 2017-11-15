<?php
include 'template/header.php';
?>
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

                                    <div class="col">
                                        <div class="first-box">
                                        <header class="headox">
                                            <h4>1 of 2</h4>
                                            <div class=body-box>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <hr>
                                                <h4>SCOLARITE</h4>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <hr>
                                                <h4>STAGES</h4>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <hr>
                                                <h4>GENERAL</h4>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <hr>
                                                <h4>VIE ASSOCIATIVE</h4>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <hr>
                                                <h4>SPORT</h4>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <p><a><i></i></a></p>
                                                <hr>
                                            </div>
                                        </header>
                                        </div>
                                    </div>
                                    <div class="col">
                                        1 of 2
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include 'template/footer.php';
?>