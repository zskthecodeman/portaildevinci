<?php
include 'template/header.php';
?>
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

    <div class="container">
        <div class="row">
            <div class="col first-box">
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
            <div class="col">
                1 of 2
            </div>
        </div>
    </div>
<?php
include 'template/footer.php';
?>