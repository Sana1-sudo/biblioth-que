<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://w0.peakpx.com/wallpaper/622/700/HD-wallpaper-flower-book-nature-new-nice-pages-petals-white.jpg'); /* Chemin vers votre image d'arrière-plan */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            min-height: 100vh; /* Garantit que le footer reste en bas même si le contenu est court */
            position: relative;
        }
        .card {
            border: none;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); /* Ajoute une ombre à la carte */
        }
        .form-control {
            border-radius: 25px; /* Bordures arrondies pour les champs de saisie */
            margin-bottom: 20px; /* Marge entre les champs de saisie */
        }
        .btn-primary {
            border-radius: 25px; /* Bordures arrondies pour les boutons */
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Couleur de fond du footer */
            color: #fff; /* Couleur du texte du footer */
            padding: 20px 0; /* Espace intérieur du footer */
            text-align: center;
        }
        .social-icons a {
            color: #fff; /* Couleur des icônes */
            margin: 0 10px; /* Marge entre les icônes */
        }



    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Welcome to our library</h2>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                            
                                <button type="submit" class="btn btn-primary btn-lg btn-block">sign in</button>
                                
                            </div>
                            
                            
                            <div class="text-center">
              <a href="#">Forget password</a>
            </div>
            <div class="text-center mt-3">
              <p>Don't have an account? <a href="#">S'inscrire</a></p>
            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p> <h1>2024 Welearn.</h1> All Rights Reserved.   <br>
        </p> 
        </div>
        <div class="text-center mt-3">
              <a href="#"><i class="fab fa-facebook fa-lg mr-3" ><h6> welearn Tunisia</h6></i></a>
              <a href="#"><i class="fab fa-instagram fa-lg mr-3"><h6>welearn Tunisia</h6></i></a>
              <a href="#"><i class="fas fa-envelope fa-lg"> welearn@gmail.com </i></a>
            </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
