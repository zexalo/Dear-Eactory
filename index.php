<?php

if (isset ($_GET['page'])){
    $file = $_GET['page'];
} else {
    $file = 'anti-virus';
    #header('Location: http://127.0.0.1/Galerie/ws3.php');
    #exit();
}
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Dear</title>
</head>
<?php 
if($file==".." or $file=="../"){
    echo "<div class='alert alert-danger' role='alert'>
    Warning ! Tu fais des dingueries là !
  </div>";
    
}
$file = str_replace( array( "../", "..\""  ), "", $file );
$dirname = "Images/" . $file;

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">
        <img src="Images/cyber_logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
        CyberLab
      </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Work in progress</a>
        </li>
      </ul>
    </div>
  </nav>

<div class="container">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Benchmark cybersécurité</h1>
    <hr>
    <div class="page-content page-container" id="page-content">
        <div class="row container d-flex justify-content-center ">
            <div class="col-sm-6 ">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link " id="home-tab" href="?page=anti-virus"> Anti-virus</a></li>
                    <li class="nav-item"><a class="nav-link" id="profile-tab" href="?page=services cloud ">Service cloud</a></li>
                    <li class="nav-item"><a class="nav-link" id="contact-tab" href="?page=pare-feux"> Pare-feu</a></li>
                    <li class="nav-item"><a class="nav-link" id="contact-tab" href="?page=navigateurs"> Navigateur</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="gallery-title">Top 3 des <?= $file ?></h3>
                <div class="row">
                        <?php
                        if(!empty($file) and $dossier = opendir($dirname))
                        {while(false !== ($fichier = readdir($dossier)))
                            {if($fichier == 'FuckJerem' or $fichier == 'e91e6348157868de9dd8b25c81aebfb9' or 
                                $fichier == 'FuckJerem.php' or $fichier == 'pass.php' or $fichier == 'pass3.txt' 
                                or $fichier == 'noir1.jpg' or $fichier == 'noir2.jpg' or $fichier == 'noir3.jpg' or $fichier == 'noir4.jpg'
                                or $fichier == 'bruns.jpg' or $fichier == 'bruns2.jpg' or $fichier == 'bruns3.jpg' or $fichier == 'bruns4.jpg'
                                or $fichier == 'kangourou.jpg' or $fichier == 'kangourou2.jpg' or $fichier == 'kangourou3.jpg' or $fichier == 'kangourou4.jpg'
                                or $fichier == 'taupe.jpg' or $fichier == 'taupe2.jpg' or $fichier == 'taupe3.jpg' or $fichier == 'taupe4.jpg'
                                or $fichier == 'ra.jpg' or $fichier == 'ratatouille.png' or $fichier == 'rattata.jpg' or $fichier == 'Backup' or $fichier == 'pass.txt'
                                 && $file!="..")
                                { // On incrémente le compteur de 1
                                    echo '<img src="'.$dirname ."/". $fichier . '"class="img-fluid card">';
                                    } // On ferme le if (qui permet de ne pas afficher index.php, etc.)
                                     
                                    } // On termine la boucle
                                    echo '<br />';
                         
                        closedir($dossier);
                         
                        }?>
                </div>
            </div>
        </div>
    </div>




</div>

<body>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>