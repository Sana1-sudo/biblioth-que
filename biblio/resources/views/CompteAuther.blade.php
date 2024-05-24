<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Compte - We Learn</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://w0.peakpx.com/wallpaper/622/700/HD-wallpaper-flower-book-nature-new-nice-pages-petals-white.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            margin-bottom: 20px;
        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
        }
        .content-container {
            padding: 20px;
            min-height: calc(100vh - 56px - 40px);
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
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
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/DashboordAuther">Dashboord</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/CompteAuther">add book </a>
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

    <div class="container content-container">
        <h2 class="mb-4">Add new book</h2>
        <div class="form-container">
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="bookName">Book Name</label>
                    <input type="text" class="form-control" id="bookName" placeholder="Enter book name">
                </div>
                <div class="container"> 
            
            <!-- Filtre par catégorie -->
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category">
                    
                    <option value="literature">Literature</option>
                    <option value="scientific">Scientific</option>
                    <option value="computer">Computer</option>
                    <option value="medical">Medical</option>
                    <option value="mathematics">Mathematics</option>
                </select>
            </div>


                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea class="form-control" id="details" rows="3" placeholder="Enter book details"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number positive" class="form-control" id="price" placeholder="Enter book price">
                </div>
                <div class="form-group">
                    <label for="cover">Book Cover</label>
                    <input type="file" class="form-control-file" id="cover">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
