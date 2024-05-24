<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Client</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (pour les icônes) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.5);
            margin-bottom: 20px; /* Ajoute une marge en bas pour séparer le contenu suivant */
        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff; /* Couleur du texte */
        }
        .content-container {
            background-image: url('https://w0.peakpx.com/wallpaper/622/700/HD-wallpaper-flower-book-nature-new-nice-pages-petals-white.jpg'); /* Arrière-plan de la section de contenu */
            background-size: cover;
            background-position: center;
            padding: 20px; /* Ajoute un espace intérieur pour le contenu */
            min-height: calc(100vh - 56px - 20px); /* Hauteur minimale pour s'adapter à l'écran */
            /* (100vh - hauteur de la barre de navigation - marge en bas) */
        }
        .image-container {
            position: relative;
            width: 150px; /* Largeur de l'image111111 */
        }
        .pdf-icon {
            position: absolute;
            top: 50%; /* Position verticale au milieu */
            left: 110%; /* Position horizontale au milieu */
            transform: translate(-50%, -50%); /* Centre l'icône */
            font-size: 24px; /* Taille de l'icône */
            color: #fff; /* Couleur de l'icône */
        }
        footer {
            background-color: #343a40; /* Couleur de fond du footer */
            color: #fff;
            padding: 10px 0; /* Ajuste la hauteur du padding du footer */
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
       
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><h1><i>We Learn</i></h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <form class="form-inline">
                            <a class="nav-link" href="#">Book Name</a>
                            <input type="text" class="form-control mr-sm-2" id="bookName" placeholder="Enter book name">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/addbook">Add Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/contactus">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/aboutus">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-container">
        <!-- <div class="container mt-5">-->
        <!-- <div class="content-container"> -->
         <div class="container"> 
            
            <!-- Filtre par catégorie -->
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category">
                    <option value="all">All Categories</option>
                    <option value="literature">Literature</option>
                    <option value="scientific">Scientific</option>
                    <option value="computer">Computer</option>
                    <option value="medical">Medical</option>
                    <option value="mathematics">Mathematics</option>
                </select>
            </div>
            <!-- Filtre par année -->
            <div class="form-group">
                <label for="year">Year:</label>
                <select class="form-control" id="year">
                    <option value="all">All Years</option>
                    <?php
                    for ($i = 1970; $i <= 2030; $i++) {
                        echo "<option value=\"$i\">$i</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </div>

            <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://www.editions-frison-roche.com/system/product_pictures/data/009/650/113/original/9782876713659.png" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">COMPRENDRE LA TERMINOLOGIE MÉDICALE</h5>
                                <p class="card-text">Méthode d’apprentissage du langage médical, avec un glossaire

de Gilles Landrivon (auteur) 
janvier 2000 </p>
                                <p class="card-text">Prix: 39.900dt</p>
                                
                                <button class="btn btn-danger">Add to cart <a href="http://127.0.0.1:8000/addcart"></button>
                                <a href="http://127.0.0.1:8000/details">
    <button class="btn btn-primary">Details </button>
    
    
</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>


        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://static.fnac-static.com/multimedia/Images/FR/NR/60/1a/16/1448544/1545-6/tsp20130830123911/Terminologie-medicale.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"> TERMINOLOGIE MÉDICALE</h5>
                                <p class="card-text">Type Scolaire / Universitaire
Format broché
Editeur Erpi
Parution 28/06/2024  </p>
                                <p class="card-text">Prix: 24.900dt</p>
                                <button class="btn btn-danger">Ajouter au panier</button>
                                <button class="btn btn-primary">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://images-eu.ssl-images-amazon.com/images/I/51tbreJ7LAL._AC_US436_QL65_.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"> Arduino</h5>
                                <p class="card-text">
de Olivier CHAU-HUU (Auteur), Pascale CHAU-HUU (Illustrations)  Broché – 1 octobre 2020 </p>
                                <p class="card-text">Prix: 24.900dt</p>
                                <button class="btn btn-danger">Ajouter au panier</button>
                                <button class="btn btn-primary">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://static.fnac-static.com/multimedia/PE/Images/FR/NR/9a/41/67/6767002/1540-1/tsp20240411074410/Informatique-pour-tous-Claes-preparatoires-scientifiques-1re-et-2e-annees.jpg
" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"> Informatique pour tous</h5>
                                <p class="card-text">
                                Date de parution
07/09/2015  Editeur
Vuibert Prépas Nombre de pages 368 </p>
                                <p class="card-text">Prix: 38.900dt</p>
                                <button class="btn btn-danger">Ajouter au panier</button>
                                <button class="btn btn-primary">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>   
        
    
   
        <div class="container"> 
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="https://www.babelio.com/couv/CVT_Alice-au-pays-des-merveilles_1046.jpg" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Alice au pays des merveilles</h5>
                                <p class="card-text">En 1862, au cours d'une excursion sur l'Isis, un affluent de la Tamise, le révérend Dodgson raconta aux enfants Liddell (et spécialement à Alice) ce qui deviendra "Alice dans le souterrain", première version d'Alice au pays des merveilles qu'il signera Lewis Carroll et publiera avec le succès qu'on sait, en 1865.
</p>
                                <p class="card-text">Prix: 44.900dt</p>
                                
                                <button class="btn btn-danger">Add to cart <a href="http://127.0.0.1:8000/addcart"></button>
                                <a href="http://127.0.0.1:8000/details">
    <button class="btn btn-primary">Details </button>
    
    
</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>

<!-- <footer>  
        <div class="container"> 
            <p> <h1>2024 Welearn.</h1> All Rights Reserved.   <br>
        </p> 
        </div>
        <div class="text-center mt-3">
              <a href="#"><i class="fab fa-facebook fa-lg mr-3" ><h6> welearn Tunisia</h6></i></a>
              <a href="#"><i class="fab fa-instagram fa-lg mr-3"><h6>welearn Tunisia</h6></i></a>
              <a href="#"><i class="fas fa-envelope fa-lg"> welearn@gmail.com </i></a>
            </div>
    </footer>-->
    
    </div>
    <!-- -->

    <!-- Bootstrap JS (optionnel si vous n'utilisez pas de fonctionnalités JavaScript de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
