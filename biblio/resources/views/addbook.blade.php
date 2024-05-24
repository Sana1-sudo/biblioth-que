<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
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
            background-color: #f8f9fa; /* Couleur de fond de la section de contenu */
            padding: 20px; /* Ajoute un espace intérieur pour le contenu */
            min-height: calc(100vh - 56px - 20px); /* Hauteur minimale pour s'adapter à l'écran */
            /* (100vh - hauteur de la barre de navigation - marge en bas) */
        }
        footer {
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 20px 0;
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
                        <a class="nav-link" href="http://127.0.0.1:8000/home">Home</a>
                    </li>
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
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="bookName">Book Name:</label>
                    <input type="text" class="form-control" id="bookName" placeholder="Enter book name">
                </div>
                <div class="form-group">
                    <label for="bookName">price:</label>
                    <input type="text" class="form-control" id="bookName" placeholder="price">
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category">
                        <option value="fiction">Fiction</option>
                        <option value="non-fiction">Non-Fiction</option>
                        <option value="science-fiction">Science Fiction</option>
                    </select>
                </div>
                
                <div class="form-group">
    <label for="cover">Cover (PDF):</label>
    <input type="file" class="form-control-file" id="cover" accept="application/pdf" data-browse="Browse" data-placeholder="No file chosen">
</div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

   <!-- <footer>
        <div class="container">
            <p>&copy; 2024 We Learn. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
