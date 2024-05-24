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
            padding: 10px; /* Ajoute un espace intérieur pour le contenu */
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
            padding: 20px 0; /* Ajuste la hauteur du padding du footer */
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
        <a class="navbar-brand" href="#"><h1><i>We Learn</i></h1></a></li>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                       
                        <a class="nav-link" href="http://127.0.0.1:8000/DashboordAuther">Dashboord</a>
                    </li>
                        <a class="nav-link" href="http://127.0.0.1:8000/">My compte</a>
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



    
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 We Learn. All rights reserved.</p>
            <p>
                <a href="#" class="text-dark"><i class="fab fa-facebook-f"></i> Facebook</a> |
                <a href="#" class="text-dark"><i class="fab fa-instagram"></i> Instagram</a> |
                <a href="mailto:info@welearn.com" class="text-dark"><i class="fas fa-envelope"></i> Email</a>
            </p>
        </div>
    </footer>



</body>

</html>
