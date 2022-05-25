<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./stylepopup.css">
</head>
<body>
    <div class="container">

        <nav class="flex-container">
            <h1>ILO Projet</h1>
            <div class="menu">
                <button onclick="document.getElementById('id02').style.display='block'"><i class="fa fa-user"></i> Se connecter</button>
            </div>
        </nav> 

         <!-- The Modal -->
         <div id="id02" class="modal">
                <span onclick="document.getElementById('id02').style.display='none'"class="close" title="Close Modal">&times;</span>

                <!-- Modal Content -->
                <form class="modal-content animate" action="" method="post">
                    <div class="imgcontainer">
                        <img src="" alt="CONNEXION" class="avatar">
                    </div>

                    <div class="container">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Votre adresse email" name="email" required>

                        <label for="psw"><b>Mot de passe</b></label>
                        <input type="password" placeholder="Votre mot de passe" name="psw" required>

                        <button type="submit">Se connecter</button>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Annuler</button>
                        <span class="psw">Mot de passe <a href="#">oublié?</a></span>
                    </div>
                    <p>Pas encore inscrit? <a href="welcome.php">S'inscrire</a></p>
                </form>
            </div>
        </div>

        <div class="div0">
            <h2>FIND ME</h2>
            <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium nulla iusto aut, ut harum tenetur</h3>

            <div class="row">
            <div class="div1 col-lg-6 col-md-6 col-sm-6">
                <p>Je propose une prestation</p>
            </div>

            <div class="div2 col-lg-6 col-md-6 col-sm-6">
                <p>Je cherche une prestation</p>
            </div>     
            </div>
            
        </div>
    </div>
    <script src="./stylepopup.css"></script>
</body>
</html>