<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Dashboard - We Learn</title>
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
            color: #000;
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
        .dashboard-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .dashboard-header h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
        }
        .dashboard-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .dashboard-card:hover {
            transform: scale(1.05);
        }
        .dashboard-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
       
        .btn-update {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-view {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
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
                       
                       <a class="nav-link"  href="http://127.0.0.1:8000/DashboordAuther">Dashboord</a>
                   </li>
                       <a class="nav-link" href="http://127.0.0.1:8000/CompteAuther">Add book</a>
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

    <div class="content-container container">
        <h2 class="mb-4">My compte</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Year of submition</th>
                    <th>Number of Sales</th>
                    <th>Update</th>
                    <th>Number of View</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>COMPRENDRE LA TERMINOLOGIE MÉDICALE</td>
                    <td>2020</td>
                    <td>15</td>
                    <td><button class="btn btn-update btn-sm"><i class="fas fa-edit"></i> Update</button></td>
                    <td><button class="btn btn-view btn-sm"><i class="fas fa-eye"></i> 20 </button></td>
                </tr>
                <tr>
                    <td>TERMINOLOGIE MÉDICALE</td>
                    <td>2022</td>
                    <td>20</td>
                    <td><button class="btn btn-update btn-sm"><i class="fas fa-edit"></i> Update</button></td>
                    <td><button class="btn btn-view btn-sm"><i class="fas fa-eye"></i> 30</button></td>
                </tr>
                <!-- More rows as needed -->
            </tbody>
        </table>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 We Learn. All rights reserved.</p>
            <p>
                <a href="#" class="text-dark"><i class="fab fa-facebook-f"></i>  We Learn</a> |
                <a href="#" class="text-dark"><i class="fab fa-instagram"></i> We Learn</a> |
                <a href="mailto:info@welearn.com" class="text-dark"><i class="fas fa-envelope"></i> Welearn@gmail.com</a>
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
